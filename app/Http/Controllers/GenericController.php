<?php

namespace App\Http\Controllers;

use App\Models\Appoiment;
use Illuminate\Http\Request;

class GenericController extends Controller
{
    public function loadTables()
    {
        $appPend = Appoiment::with('user')->where('status','=','Reservada')->get();
        $appAtend = Appoiment::with('user')->where('status','=','Atendida')->get();
        $appCanc = Appoiment::with('user')->where('status','=','Cancelada')->get();
       
        return view('table.generic',compact('appPend','appAtend','appCanc'));
    }
}
