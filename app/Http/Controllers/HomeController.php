<?php

namespace App\Http\Controllers;

use App\Models\Appoiment;
use App\Models\Exam;
use App\Models\Result;
use App\Models\User;
use App\Models\WorkDay;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except('index');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('welcome');
    }

    public function dashboard()
    {
        $role = Auth::user()->getRoleNames()->first();
        $user = Auth::user()->id;

        if ($role == 'Paciente') {
            $app = $this->appoiments($role, $user);
            $resApp = Appoiment::where("user_id", $user)->where('status', "1")->count();
            $attApp = Appoiment::where("user_id", $user)->where('status', "2")->count();
            $canApp = Appoiment::where("user_id", $user)->where('status', "0")->count();
            $results = Result::where("user_id", $user)->count();
            $exams = Exam::where('status', "1")->count();
            $users = User::all()->count();
            $hora = $this->schedule();
            return view('admin', compact('resApp', 'attApp', 'canApp', 'results', 'exams', 'app', 'users', 'hora'));
        } else {
            $app = $this->appoiments($role, $user);
            $resApp = Appoiment::where('status', "1")->count();
            $attApp = Appoiment::where('status', "2")->count();
            $canApp = Appoiment::where('status', "0")->count();
            $results = Result::all()->count();
            $exams = Exam::where('status', "1")->count();
            $users = User::all()->count();
            $hora = $this->schedule();
            return view('admin', compact('resApp', 'attApp', 'canApp', 'results', 'exams', 'app', 'users', 'hora'));
        }
    }

    private function appoiments($role, $userId)
    {
        $appoiments = Appoiment::all()->count();

        if ($appoiments > 0) {
            //mysql
            if ($role == 'Paciente') {
                $monthlyCounts = Appoiment::where("user_id", $userId)->select(
                    DB::raw('MONTH(created_at) as month'),
                    DB::raw('COUNT(1) as count')
                )->groupBy('month')->get()->toArray();
            } else {
                $monthlyCounts = Appoiment::select(
                    DB::raw('MONTH(created_at) as month'),
                    DB::raw('COUNT(1) as count')
                )->groupBy('month')->get()->toArray();
            }

            //postgrest
            /* $monthlyCounts = Appoiment::select(
            DB::raw('EXTRACT(MONTH FROM created_at) AS month'),
            DB::raw('COUNT(1) AS count')
            )->groupBy('month')->get()->toArray();*/



            $counts = array_fill(0, 12, 0);

            foreach ($monthlyCounts as $monthlyCount) {
                $index = $monthlyCount['month'] - 1;
                $counts[$index] = $monthlyCount['count'];
            }

            return $counts;
        } else {
            return $counts = 0;
        }
    }

    private function schedule()
    {
        $days = [
            'Lunes', 'Martes', 'Miércoles',
            'Jueves', 'Viernes', 'Sábado', 'Domingo'
        ];
        $workDays = WorkDay::all();
        $array = array();
        foreach ($workDays as $key => $value) {
          
            if ($value->active==true) {
                array_push($array, $value->day);
            }
        }
        
        $d = array();
        foreach ($array as $value) {
            foreach ($days as $key => $val) {
                if ($value == $key) {
                    array_push($d, $val);
                }
            }
        }
        return implode(',', $d);
    }
}
