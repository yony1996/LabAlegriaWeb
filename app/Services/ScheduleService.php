<?php

namespace App\Services;

use App\Models\Appoiment;
use App\Models\WorkDay;
use Carbon\Carbon;
use App\Interfaces\ScheduleServiceInterface;

class ScheduleService implements ScheduleServiceInterface
{
    public function isAvailableInterval($date, $userId, Carbon $start)
    {
        $exists = Appoiment::where('user_id', $userId)
            ->where('scheduled_date', $date)
            ->where('scheduled_time', $start->format('H:i:s'))->exists();

        return !$exists;
    }

    private function getDayFromDate($date)
    {
        $dateCarbon = new Carbon($date);
        $i = $dateCarbon->dayOfWeek;
        $day = ($i == 0 ? 6 : $i - 1);
        return $day;
    }

    public function getAvailableIntervals($date, $userId)
    {
        $workDays = WorkDay::where('active', true)
            ->where('day', $this->getDayFromDate($date))
            ->first([
                'start',
                'end',
            ]);

        if ($workDays) {
            $intervals = $this->getIntervals(
                $workDays->start,
                $workDays->end,
                $date,
                $userId
            );
        } else {
            $intervals = [];
        }
       
        $data = [];
        $data = $intervals;
        return $data;
    }
    
    private function getIntervals($start, $end, $date, $userId)
    {
        $start = new Carbon($start);
        $end = new Carbon($end);
        $intervals = [];
        while ($start < $end) {

            $interval = [];

            $interval['start'] = $start->format('g:i A');
            $available = $this->isAvailableInterval($date, $userId, $start);
            $start->addMinutes(30); // espacio de tiempo para generar turno
            $interval['end'] = $start->format('g:i A');

            if ($available) {
                $intervals[] = $interval;
            }
        }
        return $intervals;
    }
}
