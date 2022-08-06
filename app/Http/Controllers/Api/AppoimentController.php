<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Appoiment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AppoimentController extends Controller
{
    public function index()
    {
        $user = Auth::guard('api')->user()->patient;
        $appoiments = Appoiment::Appoiments();
        $data = compact('appoiments');
        return $data;
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
