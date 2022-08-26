<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use PDF;


class SendMailAppoiment extends Controller
{
    public function index($appoiment)
    {
        //dd($appoiment);
        $data["email"] = $appoiment->user->email;
        $data["title"] = "Laboratorio Alegria | Reserva de turno";
        $data["hora"] = $appoiment->scheduled_time;
        $data["fecha"] = $appoiment->scheduled_date;
        $data["examen"] = $appoiment->exam->name;
        $date = Carbon::createFromFormat('Y-m-d', $appoiment->scheduled_date);
        $data["dia"] = $date->isoFormat('dddd');

        $pdf = PDF::loadView('pdf.appoimentPdf', $data);
        Mail::send('emails.appoiment', $data, function ($message) use ($data, $pdf) {
            $message->to($data["email"], $data["email"])->subject($data["title"])->attachData($pdf->output(), "Turno_Laboratorio_Alegria.pdf");
        });

        return;
    }
}
