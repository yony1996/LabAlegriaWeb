<?php

namespace App\Http\Controllers;

use App\Models\Appoiment;
use Illuminate\Http\Request;

class GenericController extends Controller
{
    public function loadTables()
    {
        $appPend = Appoiment::with('user')->where('status','=','Reservada')->paginate(3);
        $appAtend = Appoiment::with('user')->where('status','=','Atendida')->paginate(5);
        $appCanc = Appoiment::with('user')->where('status','=','Cancelada')->paginate(5);
       
        return view('table.generic',compact('appPend','appAtend','appCanc'));
    }
}
