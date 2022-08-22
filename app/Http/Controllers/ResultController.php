<?php

namespace App\Http\Controllers;

use App\Http\Requests\InfoExamsRequest;
use App\Models\Result;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use PDF;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class ResultController extends Controller
{

    public function results()
    {
        $role = Auth::user()->getRoleNames()->first();
        if ($role == 'Paciente') {
            $results = Result::where('user_id',Auth::user()->id)->orderBy('created_at', 'desc')->paginate(5);
            return view('Results.result', compact('results'));
        }
        $results = Result::orderBy('created_at', 'desc')->paginate(5);
        return view('Results.result', compact('results'));
    }
    public function storeHemato(InfoExamsRequest $request)
    {

        $doctor = $request->doctor;
        $orden = $request->orden;
        $userId = $request->user_id;
        $type = $request->type;
        $fechaMu = $request->fechaMuestra;
        $hematologia = $request->except(['_token', 'doctor', 'orden', 'user_id', 'type', 'fechaMuestra']);

        $hemato = Result::create([
            'user_id' => $userId,
            'doctor' => $doctor,
            'orden' => $orden,
            'type' => $type,
            'fechaMu' => $fechaMu,
            'hematologia' => json_encode($hematologia)
        ]);
        if ($hemato) {
            $success = 'Los resultados de han registrado.';
            return back()->with(compact('success'));
        }
    }
    public function storeCopro(InfoExamsRequest $request)
    {
        $doctor = $request->doctor;
        $orden = $request->orden;
        $userId = $request->user_id;
        $type = $request->type;
        $fechaMu = $request->fechaMuestra;
        $coprologia = json_encode($request->except(['_token', 'doctor', 'orden', 'user_id', 'type', 'fechaMuestra']));
        $copro = Result::create([
            'user_id' => $userId,
            'doctor' => $doctor,
            'orden' => $orden,
            'type' => $type,
            'fechaMu' => $fechaMu,
            'coprologico' => $coprologia
        ]);
        if ($copro) {
            $success = 'Los resultados de han registrado.';
            return back()->with(compact('success'));
        }
    }
    public function storeOrin(InfoExamsRequest $request)
    {
        $doctor = $request->doctor;
        $orden = $request->orden;
        $userId = $request->user_id;
        $type = $request->type;
        $fechaMu = $request->fechaMuestra;
        $orina = $request->except(['_token', 'doctor', 'orden', 'user_id', 'type', 'fechaMuestra']);
        $orina = Result::create([
            'user_id' => $userId,
            'doctor' => $doctor,
            'orden' => $orden,
            'type' => $type,
            'fechaMu' => $fechaMu,
            'orina' => json_encode($orina)
        ]);
        if ($orina) {
            $success = 'Los resultados de han registrado.';
            return back()->with(compact('success'));
        }
    }
    public function storeCov(InfoExamsRequest $request)
    {
        $doctor = $request->doctor;
        $orden = $request->orden;
        $userId = $request->user_id;
        $type = $request->type;
        $fechaMu = $request->fechaMuestra;
        $covid = json_encode($request->except(['_token', 'doctor', 'orden', 'user_id', 'type', 'fechaMuestra']));
        $covid = Result::create([
            'user_id' => $userId,
            'doctor' => $doctor,
            'orden' => $orden,
            'type' => $type,
            'fechaMu' => $fechaMu,
            'covid' => $covid
        ]);
        if ($covid) {
            $success = 'Los resultados de han registrado.';
            return back()->with(compact('success'));
        }
    }

    public function preview($id)
    {
        $preview = Result::find($id);

        switch ($preview->type) {
            case "covid":
                $data = json_decode($preview->covid);
                $userData = $preview;
                $pdf = PDF::loadView('pdf.covid', compact('data', 'userData'));
                break;
            case "sangre":
                $data = json_decode($preview->hematologia);
                $userData = $preview;
                $pdf = PDF::loadView('pdf.sangre', compact('data', 'userData'));
                break;
            case "orina":
                $data = json_decode($preview->orina);
                $userData = $preview;
                $pdf = PDF::loadView('pdf.orina', compact('data', 'userData'));
                break;
            case "heces":
                $data = json_decode($preview->coprologico);
                $userData = $preview;
                $pdf = PDF::loadView('pdf.heces', compact('data', 'userData'));
                break;
        }
        //dd(json_decode($hemato->hematologia, true));
        //$hemato = json_decode($hemato->orina);
        //dd($hemato);
        //$custom= array(0,0,76,144);
        //$pdf = PDF::loadView('pdf.sangre');
        $pdf->setPaper('A4'); //$pdf->setPaper($custom);
        return $pdf->stream();
    }

    public function print($id)
    {
        $preview = Result::find($id);

        switch ($preview->type) {
            case "covid":
                $data = json_decode($preview->covid);
                $userData = $preview;
                $pdf = PDF::loadView('pdf.covid', compact('data', 'userData'));
                break;
            case "sangre":
                $data = json_decode($preview->hematologia);
                $userData = $preview;
                $pdf = PDF::loadView('pdf.sangre', compact('data', 'userData'));
                break;
            case "orina":
                $data = json_decode($preview->orina);
                $userData = $preview;
                $pdf = PDF::loadView('pdf.orina', compact('data', 'userData'));
                break;
            case "heces":
                $data = json_decode($preview->coprologico);
                $userData = $preview;
                $pdf = PDF::loadView('pdf.heces', compact('data', 'userData'));
                break;
        }

        $pdf->setPaper('A4');

        $FechaHoy = Carbon::now()->format('Y-m-d_H:i:s');
        return $pdf->download("EXAMEN_$preview->type_ $FechaHoy.pdf");
    }
}
