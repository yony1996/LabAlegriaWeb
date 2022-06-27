<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Interfaces\ScheduleServiceInterface;

class ScheduleController extends Controller
{
    public function hours(Request $request, ScheduleServiceInterface $scheduleService)
    {
        $rule = [
            'date' => 'required|date_format:"Y-m-d"',
        ];
        $this->validate($request, $rule);
        //dd($request->all());
        $date = $request->input('date');
        $userId = $request->input('user_id');
        //dd($doctorId);
       return $scheduleService->getAvailableIntervals($date, $userId);
    }
}
