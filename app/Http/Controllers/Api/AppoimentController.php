<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Appoiment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AppoimentController extends Controller
{
    public function index()
    {
        $user = Auth::guard('api')->user()->patient;
        $appoiments =  Appoiment::join('users', 'users.id', '=', 'appoiments.user_id')
            ->join('exams', 'exams.id', '=', 'appoiments.exam_id')
            ->where('user_id', '=', Auth::user()->id)
            ->select('exams.name', 'appoiments.status','appoiments.scheduled_date','appoiments.scheduled_time')
            ->get();

        return  $appoiments;
    }

    public function store(Request $request)
    {
        /**
         *  'user_id',
         *  'exam_id',
         *  'scheduled_date',
         *  'scheduled_time',
         */
        $user = Auth::user()->id;
        $appointment = Appoiment::createForPatient($request, $user);
        if ($appointment) {
            $success = true;
        } else {
            $success = false;
        }
        return compact('success');
    }
}
