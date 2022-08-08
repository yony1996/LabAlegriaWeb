<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Exam;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ExamController extends Controller
{
    public function index()
    {
    	$user= Auth::guard('api')->user()->patient;
        $exams = Exam::where('status', 1)->select(['id', 'name'])->get();
    	return $exams;

    }
}
