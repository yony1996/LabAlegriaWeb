<?php

namespace App\Http\Controllers;

use App\Models\WorkDay;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WorkDayController extends Controller
{
    private $days = [
        'Lunes', 'Martes', 'Miércoles',
        'Jueves', 'Viernes', 'Sábado', 'Domingo'
    ];
    public function edit()
    {

        $workDays = WorkDay::all();
        if (count($workDays) > 0) {
            $workDays->map(function ($workDay) {

                $workDay->start = (new Carbon($workDay->start))->format('g:i A');
                $workDay->end = (new Carbon($workDay->end))->format('g:i A');

                return $workDay;
            });
        } else {
            $workDays = collect();
            for ($i = 0; $i < 7; ++$i) {
                $workDays->push(new WorkDay());
            }
        }

        $days = $this->days;
        return view('Admin.Schedule.schedule', compact('days', 'workDays'));
    }
    public function store(Request $request){
        $active = $request->input('active') ?: [];
        $start = $request->input('start');
        $end = $request->input('end');
        

        $errors = [];
        for ($i = 0; $i < 7; $i++) {
            if ($start[$i] > $end[$i]) {
                $errors[] = 'Las horas ingresadas son inconsistentes para el día ' . $this->days[$i] . '.';
            }
            WorkDay::updateOrCreate(
                [
                    'day' => $i,
                ],
                [
                    'active' => in_array($i, $active),
                    'start' => $start[$i],
                    'end' => $end[$i],
                ]
            );
        }
        if (count($errors) > 0) {
            return back()->with(compact('errors'));
        }
        $notification = 'Los cambios se han guardado correctamente';
        return back()->with(compact('notification'));
    }

}
