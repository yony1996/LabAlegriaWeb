<?php

namespace App\Http\Controllers;

use App\Interfaces\ScheduleServiceInterface;
use App\Models\Appoiment;
use App\Models\Exam;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\DataTables;
use App\Http\Controllers\SendMailAppoiment;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

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
                    } elseif ($row->status == 0) {
                        $status = '<label class="badge badge-danger  badge-pill">Cancelada</label>';
                    } else {
                        $status = '<label class="badge badge-success  badge-pill">Atendida</label>';
                    }
                    return $status;
                })
                ->rawColumns(['status', 'action'])
                ->make(true);
        }
    }

    /* public function store(Request $request)
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
            $notifiMail= $sendMail->index($created);
            return response()->json(['success' => $notification]);
        } else {
            $error = 'Ocurrio un problema al registrar el turno';
            return response()->json(['success' => $error]);
        }
    }
 */


    public function store(Request $request)
    {
        // Validación
        $validated = $request->validate([
            'scheduled_date' => 'required|date_format:Y-m-d|after_or_equal:today',
            // Agrega otros campos necesarios para la creación
        ]);

        try {
            return DB::transaction(function () use ($request, $validated) { // Pasamos ambos
                $userId = auth()->id();
                $date = $validated['scheduled_date'];

                if (Appoiment::where('user_id', $userId)
                    ->whereDate('scheduled_date', $date)
                    ->exists()
                ) {
                    return response()->json([
                        'error' => "Ya tienes una cita registrada para: $date"
                    ], 422);
                }

                // Solución: Pasar el Request original si es necesario
                $appointment = Appoiment::createForPatient($request, $userId); // <--- Cambio aquí

                // Alternativa si debe usarse solo datos validados:
                // $appointment = Appoiment::createForPatient($validated, $userId);

                if (!$appointment) {
                    throw new \Exception('Error al crear la cita');
                }

                SendMailAppoiment::dispatch($appointment);

                return response()->json([
                    'success' => 'Cita registrada exitosamente',
                    'data' => $appointment
                ], 201);
            });
        } catch (\Exception $e) {
            Log::error('Error creating appointment: ' . $e->getMessage());
            return response()->json([
                'error' => 'Error interno del servidor'
            ], 500);
        }
    }
}
