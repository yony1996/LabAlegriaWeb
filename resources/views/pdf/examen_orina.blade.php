<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Laboratorio Alegria</title>

    <style>
        @page {
            margin-top: 40px;
            margin-bottom: 60px;
            position: relative;
        }


        * {
            box-sizing: border-box;
            font-family: "Times New Roman", Times, serif;
            margin: 0;
        }

        body {
            margin: 0.6cm 1.8cm 0.49cm 1.76cm;
            padding: 0px;
        }

    </style>
</head>

<body>
    <table style="width: 100%;">
        <tr>
            <td>
                <img src="{{public_path('dist/images/logo2.png')}}" height="10%" width="60%" alt="">
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
            <td style="font-size: 10px;">Juan</td>
            <td style="font-size: 10px;">MEDICO SOLICITANTE:</td>
            <td style="font-size: 10px;">dsds</td>
        </tr>
        <tr style="border-top: 1px solid black;">
            <td style="font-size: 10px;">CEDULA:</td>
            <td style="font-size: 10px;">sdcs</td>
            <td style="font-size: 10px;">FECHA TOMA DE MUESTRA:</td>
            <td style="font-size: 10px;">ewfwef</td>
        </tr>
        <tr style="border-top: 1px solid black;">
            <td style="font-size: 10px;">EDAD:</td>
            <td style="font-size: 10px;">fwefw</td>
            <td style="font-size: 10px;">FECHA DE VALIDACIÓN</td>
            <td style="font-size: 10px;">efwfe</td>
        </tr>
        <tr style="border-top: 1px solid black;">
            <td style="font-size: 10px;">GENERO:</td>
            <td style="font-size: 10px;">wfeef</td>
            <td style="font-size: 10px;"></td>
            <td style="font-size: 10px;"></td>
        </tr>
    </table>

    <table style="width: 100%; margin-top: 1cm;  border-spacing: 8px;">
        <tr>
            <th align="left" colspan="4" style="padding-left: 1.5cm; background: #75C4DD;">ORINA</th>
        </tr>
        <tr>
            <th align="left" colspan="3">EXAMEN FISICO</th>
        </tr>
        <tr style="border-top: 1px solid black;">
            <td style="font-size: 12px;">Color:</td>
            <td style="font-size: 12px;">{{$hemato->examFisiColor[0]}}</td>
            <td style="font-size: 12px;">Reacción:</td>
            <td style="font-size: 12px;">fwefew</td>
        </tr>
        <tr style="border-top: 1px solid black;">
            <td style="font-size: 12px;">Aspecto:</td>
            <td style="font-size: 12px;">wfef</td>
            <td style="font-size: 12px;">pH:</td>
            <td style="font-size: 12px;">fwef</td>
        </tr>
        <tr style="border-top: 1px solid black;">
            <td style="font-size: 12px;">Densidad:</td>
            <td style="font-size: 12px;">fsefe</td>
            <td style="font-size: 12px;"></td>
            <td style="font-size: 12px;"></td>
        </tr>
        <tr>
            <th align="left" colspan="3">EXAMEN QUIMICO</th>
        </tr>
        <tr style="border-top: 1px solid black;">
            <td style="font-size: 12px;">Leucocitos:</td>
            <td style="font-size: 12px;">wefew</td>
            <td style="font-size: 12px;">Cetonas:</td>
            <td style="font-size: 12px;">wefew</td>
        </tr>
        <tr style="border-top: 1px solid black;">
            <td style="font-size: 12px;">Nitritos:</td>
            <td style="font-size: 12px;">fwef</td>
            <td style="font-size: 12px;">Urobilinógeno:</td>
            <td style="font-size: 12px;">wfeef</td>
        </tr>
        <tr style="border-top: 1px solid black;">
            <td style="font-size: 12px;">Proteinas:</td>
            <td style="font-size: 12px;">fwefew</td>
            <td style="font-size: 12px;">Bilirrubinas:</td>
            <td style="font-size: 12px;">wefew</td>
        </tr>
        <tr style="border-top: 1px solid black;">
            <td style="font-size: 12px;">Glucosa:</td>
            <td style="font-size: 12px;">wfef</td>
            <td style="font-size: 12px;">Sangre:</td>
            <td style="font-size: 12px;">wfef</td>
        </tr>
        <tr style="border-top: 1px solid black;">
            <td style="font-size: 12px;"></td>
            <td style="font-size: 12px;"></td>
            <td style="font-size: 12px;">Hemoglobina:</td>
            <td style="font-size: 12px;">fwefw</td>
        </tr>
        <tr>
            <th align="left" colspan="3">EXAMEN MICROSCÓPICO</th>
        </tr>
        <tr style="border-top: 1px solid black;">
            <td style="font-size: 12px;">Células Epiteliales:</td>
            <td style="font-size: 12px;">sefwef</td>
            <td style="font-size: 12px;">Cristales</td>
            <td style="font-size: 12px;">feewfw</td>
        </tr>
        <tr style="border-top: 1px solid black;">
            <td style="font-size: 12px;">Células Redondas:</td>
            <td style="font-size: 12px;">wewerew</td>
            <td style="font-size: 12px;">Bacterias:</td>
            <td style="font-size: 12px;">efwfew</td>
        </tr>
        <tr style="border-top: 1px solid black;">
            <td style="font-size: 12px;">Piocitos:</td>
            <td style="font-size: 12px;">fwefwe</td>
            <td style="font-size: 12px;">Filamento Mucoso:</td>
            <td style="font-size: 12px;">wfeewf</td>
        </tr>
        <tr style="border-top: 1px solid black;">
            <td style="font-size: 12px;">Hematíes:</td>
            <td style="font-size: 12px;">fwef</td>
            <td style="font-size: 12px;"></td>
            <td style="font-size: 12px;"></td>
        </tr>

    </table>
    <p style="font-size: 14px; font-weight: bold; font-style:italic; margin-top:1.5cm;">Validado por: MSc.BQ.Alvaro
        Bautista.</p>
    <div style="margin-top:2cm; display:flex; justify-content:center; text-align: center;">
        <hr style="width:5cm; margin: 0 auto;">
        <p style="font-size: 12px;"> MSc.BQ.Alvaro Bautista.</p>
        <p style="font-size: 12px;">CI:1003565064</p>
        <p style="font-size: 12px;">LABORATORIO</p>
    </div>
    <table style="width: 100%; margin-top:1.5cm;">
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

</body>

</html>
