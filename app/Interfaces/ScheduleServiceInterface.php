<?php
namespace App\Interfaces;

use Carbon\Carbon;

interface ScheduleServiceInterface
{
    public function getAvailableIntervals($date, $userId);
    public function isAvailableInterval($date, $userId, Carbon $start);
}