<?php

namespace App\Http\Controllers;

use App\Interfaces\ScheduleServiceInterface;
use App\Models\Appoiment;
use App\Models\Exam;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\DataTables;
use App\Http\Controllers\SendMailAppoiment;
class AppoimentController extends Controller
{
    public function index()
    {
        $intervals = null;
        $exams = Exam::where('status', 1)->select(['id', 'name'])->get();
        return view('Appoiment.index', compact('intervals', 'exams'));
    }

    public function loadTable(Request $request)
    {

        if ($request->ajax()) {
            $data = Appoiment::Appoiments();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('status', function ($row) {
                    if ($row->status == 1) {
                        $status = '<label class="badge badge-warning  badge-pill">Reservada</label>';
                    } elseif($row->status == 0) {
                        $status = '<label class="badge badge-danger  badge-pill">Cancelada</label>';
                    }else{
                        $status = '<label class="badge badge-success  badge-pill">Atendida</label>';
                    }
                    return $status;
                })
                ->rawColumns(['status', 'action'])
                ->make(true);
        }
    }

    public function store(Request $request)
    {
        $date = $request->input('scheduled_date');
        $appoiment = Appoiment::where('user_id', Auth::user()->id)->whereDate('scheduled_date', '=', $date)->count();
        if ($appoiment > 0) {
            $error = "Ya has reservado para la fecha: $date , intenta con otra fecha, Gracias. ";
            return response()->json(['error' => $error]);
        }

        $created = Appoiment::createForPatient($request, Auth::user()->id);
        if ($created) {
            $notification = 'El turno se ha registrado correctarmente.';
            $sendMail= new SendMailAppoiment();
            //$notifiMail= $sendMail->index($created);
            return response()->json(['success' => $notification]);
        } else {
            $error = 'Ocurrio un problema al registrar el turno';
            return response()->json(['success' => $error]);
        }
    }
}
