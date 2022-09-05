<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Result;
use Carbon\Carbon;
use Illuminate\Http\Request;
use PDF;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\URL;

class ResultsController extends Controller
{
    public function index()
    {
        $results = Result::where('user_id', Auth::user()->id)->select('id', 'user_id', 'doctor', 'orden', 'type', 'created_at')->orderBy('created_at', 'desc')->get();
        return $results;
    }

    public function print($id)
    {
        $preview = Result::find($id);

        switch ($preview->type) {
            case "covid":
                $data = json_decode($preview->covid);
                $userData = $preview;
                $FechaHoy = Carbon::now()->format('Y-m-d');
                $fileName = "Examen_$preview->type-$preview->user_id-$FechaHoy.pdf";
                $pdf = PDF::loadView('pdf.covid', compact('data', 'userData'));
                Storage::disk('custom')->put($fileName, $pdf->output());
                $url = URL::asset("pdf/$fileName");
                return compact('url');
                break;
            case "sangre":
                $data = json_decode($preview->hematologia);
                $userData = $preview;
                $FechaHoy = Carbon::now()->format('Y-m-d');
                $fileName = "Examen_$preview->type-$preview->user_id-$FechaHoy.pdf";
                $pdf = PDF::loadView('pdf.sangre', compact('data', 'userData'));
                Storage::disk('custom')->put($fileName, $pdf->output());
                $url = URL::asset("pdf/$fileName");
                return compact('url');
                break;
            case "orina":
                $data = json_decode($preview->orina);
                $userData = $preview;
                $FechaHoy = Carbon::now()->format('Y-m-d');
                $fileName = "Examen_$preview->type-$preview->user_id-$FechaHoy.pdf";
                $pdf = PDF::loadView('pdf.orina', compact('data', 'userData'));
                Storage::disk('custom')->put($fileName, $pdf->output());
                $url = URL::asset("pdf/$fileName");
                return compact('url');
                break;
            case "heces":
                $data = json_decode($preview->coprologico);
                $userData = $preview;
                $FechaHoy = Carbon::now()->format('Y-m-d');
                $fileName = "Examen_$preview->type-$preview->user_id-$FechaHoy.pdf";
                $pdf = PDF::loadView('pdf.heces', compact('data', 'userData'));
                Storage::disk('custom')->put($fileName, $pdf->output());
                $url = URL::asset("pdf/$fileName");
                return compact('url');
                break;
        }
    }
}
