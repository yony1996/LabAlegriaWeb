<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Laboratorio </title>
    <style>
        @page {
            margin-top: 40px;
            margin-bottom: 60px;
            position: relative;
        }


        * {
            box-sizing: border-box;
            font-family: 'Open Sans', sans-serif;
            margin: 0;
        }

        body {
            margin: 0.6cm 1.8cm 0.49cm 1.76cm;
            padding: 0px;
        }

        .result td {
            border-bottom-style: dashed;
            border-bottom-color: #b3b3b3;
            font-size: 10px;
            padding-top: 8px;
        }
    </style>
</head>

<body>
    <table style="width: 100%;">
        <tr>
            <td>
                <img src="{{ public_path('dist/images/logo2.png') }}" height="10%" width="60%" alt="">
            </td>
            <td align="right">
                <p>www.alegria.com</p>
                <p>1452365789456</p>
            </td>
        </tr>
    </table>
    <table style="width: 100%; margin-top: 1cm; border-spacing: 8px;">
        <tr>
            <th align="left" colspan="4" style="padding-left: 4cm; background: #75C4DD;">DATOS PACIENTE</th>

        </tr>
        <tr style="border-top: 1px solid black;">
            <td style="font-size: 10px;">NOMBRES:</td>
            <td style="font-size: 10px;">{{$userData->user->name}} {{$userData->user->last_name}}</td>
            <td style="font-size: 10px;">MEDICO SOLICITANTE:</td>
            <td style="font-size: 10px;">{{$userData->doctor}}</td>
        </tr>
        <tr style="border-top: 1px solid black;">
            <td style="font-size: 10px;">CEDULA:</td>
            <td style="font-size: 10px;">{{$userData->user->nui}}</td>
            <td style="font-size: 10px;">FECHA TOMA DE MUESTRA:</td>
            <td style="font-size: 10px;">{{$data->fechaMu}}</td>
        </tr>
        <tr style="border-top: 1px solid black;">
            <td style="font-size: 10px;">EDAD:</td>
            <td style="font-size: 10px;">{{$userData->user->age}}</td>
            <td style="font-size: 10px;">FECHA DE VALIDACIÓN</td>
            <td style="font-size: 10px;">{{$userData->created_at->format('Y-m-d')}}</td>
        </tr>
        <tr style="border-top: 1px solid black;">
            <td style="font-size: 10px;">GENERO:</td>
            <td style="font-size: 10px;">{{$userData->user->gender}}</td>
            <td style="font-size: 10px;">NUMERO DE ORDEN:</td>
            <td style="font-size: 10px;">{{$userData->orden}}</td>
        </tr>
    </table>
    <div style="background:#063970; color:white; padding: 5px; text-align: center; margin-top: 0.5cm;">
        <p>DETECCION DE SARS-CoV-2 (COVID-19)</p>
    </div>
    <table style="width: 100%;border-spacing: 0;">
        <tr style="background:#75C4DD">
            <td align="left" style="padding-left:5px; font-weight: bold;">EXAMEN</td>
            <td align="center" style="padding: 0; font-weight: bold;">RESULTADO</td>
            <td align="center" style="padding: 0; font-weight: bold;">V. de REF</td>
        </tr>
        <tr class="result">
            <td align="center">ANTIGENO SARS COVID19</td>
            <td align="center" style="text-transform: uppercase;">{{$data->antigenoCov}}</td>
            <td align="center"></td>
        </tr>
        <tr class="result">
            <td align="center" style="color: #b3b3b3;text-transform: uppercase;">METODO: {{$data->metodo}}</td>
            <td align="center"></td>
            <td align="center"></td>
        </tr>
        <tr class="result">
            <td align="left" style="font-weight: bold; font-size:12px;">Muestra: {{$data->metodo}}
            </td>
            <td align="center"></td>
            <td align="center"></td>
        </tr>
    </table>

    <div style="margin-top:0.5cm ;">
        <span style="font-weight: bold;">INTERPRETACION:</span>
    </div>
    <div style="width: 100%; height:auto; max-height: 150px; padding: 8px;">
        <p style=" text-align:justify; text-justify:inter-word;">
            {{$data->interpretacion}}
        </p>
    </div>
    <div>
        <span style="font-style: italic; font-weight: bold;">Nota:</span>
    </div>
    <div style="width: 100%; height:120px; padding: 8px; font-size:13px;">
        <p style=" text-align:justify; text-justify:inter-word;">
            - Existe la posibilidad de falsos positivos por reacciones cruzadas Otros Virus de la familia caranaviridae. <br/>
            - EL DIAGNOSTICO Y LA INTERPRETACION SOLO DEBE SER MANEJADO POR LIN MÉDICO capacitado. <br/>
            - Tiempos Superiores a 5-7 dias tras la aparición de sintomas Suponen Cargas Virales y un aumento de probabilidad de falsos negativos. <br/>
            - El test de Antígeno Covid-19, no debe utilizarse en personas sin síntomas, a menos que la persona sea contacto directo de un caso comprobado. <br/></p>
    </div>

    <p style="font-size: 14px; font-weight: bold; font-style:italic; margin-top:1cm;">Validado por: MSc.BQ.Alvaro
        Bautista.</p>
    <div style="margin-top:2cm; display:flex; justify-content:center; text-align: center;">
        <hr style="width:5cm; margin: 0 auto;">
        <p style="font-size: 12px;"> MSc.BQ.Alvaro Bautista.</p>
        <p style="font-size: 12px;">CI:1003565064</p>
        <p style="font-size: 12px;">LABORATORIO</p>
    </div>
    <table style="width: 100%; margin-top:0.5cm;">
        <tr>
            <td>
                <p style="font-size: 12px;">Direccion: Av. HUGO ORTIZ Y VACA DE LA VEGA </p>
                <p style="font-size: 12px;">Sector: QUITO SUR</p>
            </td>
            <td align="right">
                <p style="font-size: 12px;">laboratorioalegria@gmail.com</p>
                <p style="font-size: 12px;">0987530267</p>
                <p style="font-size: 12px;">Quito-Ecuador</p>
            </td>
        </tr>
    </table>

    <footer style="text-align: center;margin-top:20px;"><span style="font-size: 8px;">Este examen solo tendra validez al ser firmado por el laboratorista encargado de validar el resultado</span></footer>

</body>

</html>
