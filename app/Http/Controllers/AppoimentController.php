<?php

namespace App\Http\Controllers;

use App\Interfaces\ScheduleServiceInterface;
use App\Models\Appoiment;
use App\Models\Exam;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AppoimentController extends Controller
{
    public function index()
    {
        $intervals = null;
        $exams = Exam::all(['id', 'name']);

        return view('Appoiment.index', compact('intervals', 'exams'));
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
