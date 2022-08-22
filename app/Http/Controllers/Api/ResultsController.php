<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Result;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class ResultsController extends Controller
{
    public function index(){
        $results = Result::where('user_id',Auth::user()->id)->select('id','user_id','doctor','orden','type','created_at')->orderBy('created_at', 'desc')->get();
        return $results;
    }
  
}
