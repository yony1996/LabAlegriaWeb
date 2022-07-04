<?php

namespace App\Http\Controllers;

use App\Interfaces\ScheduleServiceInterface;
use App\Models\Appoiment;
use App\Models\Exam;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\DataTables;

class AppoimentController extends Controller
{
    public function index()
    {
        $intervals = null;
        $exams = Exam::all(['id', 'name']);


        return view('Appoiment.index', compact('intervals', 'exams'));
    }

    public function loadTable(Request $request)
    {
        if ($request->ajax()) {
            $data = Appoiment::Appoiments();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('status', function ($row) {
                    if ($row->status === "Reservada") {
                        $status = '<label class="badge badge-success  badge-pill">' . $row->status . '</label>';
                    } else {
                        $status = '<label class="badge badge-danger  badge-pill">' . $row->status . '</label>';
                    }
                    return $status;
                })
                ->rawColumns(['status'])
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
            return response()->json(['success' => $notification]);
        } else {
            $error = 'Ocurrio un problema al registrar el turno';
            return response()->json(['success' => $error]);
        }
    }
}
