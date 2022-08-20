<?php

namespace App\Http\Controllers;

use App\Models\Result;
use Illuminate\Http\Request;
use Illuminate\Support\Js;
use PDF;

class ResultController extends Controller
{
    public function results()
    {
        $results = Result::paginate(5);
        return view('Results.result', compact('results'));
    }
    public function storeHemato(Request $request)
    {
        $doctor = $request->doctor;
        $orden = $request->orden;
        $userId = $request->user_id;
        $hematologia = json_encode($request->except(['_token', 'doctor', 'orden', 'user_id']));

        $hemato = Result::create([
            'user_id' => $userId,
            'doctor' => $doctor,
            'orden' => $orden,
            'hematologia' => $hematologia
        ]);
        if ($hemato) {
            $success = 'Los resultados de han registrado.';
            return back()->with(compact('success'));
        } else {
            $errors = 'Ocurrio un error.';
            return back()->with(compact('errors'));
        }
    }
    public function storeCopro(Request $request)
    {
        $doctor = $request->doctor;
        $orden = $request->orden;
        $userId = $request->user_id;
        $coprologia = json_encode($request->except(['_token', 'doctor', 'orden', 'user_id']));
        $copro = Result::create([
            'user_id' => $userId,
            'doctor' => $doctor,
            'orden' => $orden,
            'coprologico' => $coprologia
        ]);
        if ($copro) {
            $success = 'Los resultados de han registrado.';
            return back()->with(compact('success'));
        } else {
            $errors = 'Ocurrio un error.';
            return back()->with(compact('errors'));
        }
    }
    public function storeOrin(Request $request)
    {
        $doctor = $request->doctor;
        $orden = $request->orden;
        $userId = $request->user_id;
        $orina = $request->except(['_token', 'doctor', 'orden', 'user_id']);       
        $orina = Result::create([
            'user_id' => $userId,
            'doctor' => $doctor,
            'orden' => $orden,
            'orina' => json_encode($orina)
        ]);
        if ($orina) {
            $success = 'Los resultados de han registrado.';
            return back()->with(compact('success'));
        } else {
            $errors = 'Ocurrio un error.';
            return back()->with(compact('errors'));
        }
    }
    public function storeCov(Request $request)
    {
        $doctor = $request->doctor;
        $orden = $request->orden;
        $userId = $request->user_id;
        $covid = json_encode($request->except(['_token', 'doctor', 'orden', 'user_id']));
        $covid = Result::create([
            'user_id' => $userId,
            'doctor' => $doctor,
            'orden' => $orden,
            'covid' => $covid
        ]);
        if ($covid) {
            $success = 'Los resultados de han registrado.';
            return back()->with(compact('success'));
        } else {
            $errors = 'Ocurrio un error.';
            return back()->with(compact('errors'));
        }
    }

    public function preview($id)
    {
        $hemato = Result::find($id);
        //dd(json_decode($hemato->hematologia, true));
        $hemato = json_decode($hemato->orina);
        //dd($hemato);
        //$custom= array(0,0,76,144);
        $pdf = PDF::loadView('pdf.examen_orina',compact('hemato'));
        $pdf->setPaper('A4'); //$pdf->setPaper($custom);
        return $pdf->stream();
    }
}
