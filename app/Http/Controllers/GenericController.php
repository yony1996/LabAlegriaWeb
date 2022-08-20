<?php

namespace App\Http\Controllers;

use App\Models\Appoiment;
use Illuminate\Http\Request;

class GenericController extends Controller
{
    public function loadTables()
    {
        $appPend = Appoiment::has('user')->where('status', '=', 1)->paginate(5);
        $appAtend = Appoiment::has('user')->where('status', '=', 2)->paginate(5);
        $appCanc = Appoiment::has('user')->where('status', '=', 0)->paginate(5);

        return view('table.generic', compact('appPend', 'appAtend', 'appCanc'));
    }

    public function updateAtendet($id)
    {

        $atendet = Appoiment::findOrfail($id)->update(['status' => 2]);
        if ($atendet) {
            $notification = 'El turno se ha marcado como atendido';
            return response()->json(['success' => $notification]);
        } else {
            $notification = 'Ocurrio un error';
            return response()->json(['success' => $notification]);
        }
    }

    public function updateCanceled($id)
    {
        Appoiment::findOrfail($id)->update([
            'status' => 0
        ]);
        return redirect()->route('generic.table')->with('status', 'Se a cambiado el estado correctamente');
    }
}
