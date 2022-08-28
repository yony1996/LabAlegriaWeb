<?php

namespace App\Http\Controllers;

use App\Models\Appoiment;
use App\Models\User;
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
            $resApp = Appoiment::where("user_id", $user)->where('status', "1")->count();
            $attApp = Appoiment::where("user_id", $user)->where('status', "2")->count();
            $canApp = Appoiment::where("user_id", $user)->where('status', "0")->count();
        } else {
            $resApp = Appoiment::where('status', "1")->count();
            $attApp = Appoiment::where('status', "2")->count();
            $canApp = Appoiment::where('status', "0")->count();
        }
        return view('admin',compact('resApp','attApp','canApp'));
    }
}
