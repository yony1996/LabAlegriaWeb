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
        .page-break {
            page-break-after: always;
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

    <table style="width: 100%; margin-top: 0.5cm; border-spacing: 8px;">
        <tr>
            <th align="left" colspan="4" style="padding-left: 4cm; background: #75C4DD;">DATOS PACIENTE</th>

        </tr>
        <tr style="border-top: 1px solid black;">
            <td style="font-size: 10px;">NOMBRES:</td>
            <td style="font-size: 10px;">{{ $userData->user->name }} {{ $userData->user->last_name }}</td>
            <td style="font-size: 10px;">MEDICO SOLICITANTE:</td>
            <td style="font-size: 10px;">{{ $userData->doctor }}</td>
        </tr>
        <tr style="border-top: 1px solid black;">
            <td style="font-size: 10px;">CEDULA:</td>
            <td style="font-size: 10px;">{{ $userData->user->nui }}</td>
            <td style="font-size: 10px;">FECHA TOMA DE MUESTRA:</td>
            <td style="font-size: 10px;">{{ $userData->fechaMu }}</td>
        </tr>
        <tr style="border-top: 1px solid black;">
            <td style="font-size: 10px;">EDAD:</td>
            <td style="font-size: 10px;">{{ $userData->user->age }}</td>
            <td style="font-size: 10px;">FECHA DE VALIDACIÓN</td>
            <td style="font-size: 10px;">{{ $userData->created_at->format('Y-m-d') }}</td>
        </tr>
        <tr style="border-top: 1px solid black;">
            <td style="font-size: 10px;">GENERO:</td>
            <td style="font-size: 10px;">{{ $userData->user->gender }}</td>
            <td style="font-size: 10px;"></td>
            <td style="font-size: 10px;"></td>
        </tr>
    </table>

    <table style="width: 100%; margin-top: 0.5cm; border-spacing: 0;">
        <tr style="background:#75C4DD">
            <td align="left" style="padding-left:5px; font-weight: bold;">BIOMETRIA HEMATICA</td>
            <td align="center" style="padding: 0; font-weight: bold;">RESULTADO</td>
            <td align="center" style="padding: 0; font-weight: bold;">UNIDAD</td>
            <td align="center" style="padding: 0; font-weight: bold;">V. de REF</td>
        </tr>
        <tr class="result">
            <td align="left">GLOBULOS BLANCOS</td>
            <td align="center">{{ $data->biometriaHGB[0] }}</td>
            <td align="center">{{ $data->biometriaHGB[1] }}</td>
            <td align="center">{{ $data->biometriaHGB[2] }}</td>
        </tr>
        <tr class="result">
            <td align="left">NEUTROFILOS</td>
            <td align="center">{{ $data->biometriaHNEU[0] }}</td>
            <td align="center">{{ $data->biometriaHNEU[1] }}</td>
            <td align="center">{{ $data->biometriaHNEU[2] }}</td>
        </tr>
        <tr class="result">
            <td align="left">LINFOCITOS</td>
            <td align="center">{{ $data->biometriaHLIN[0] }}</td>
            <td align="center">{{ $data->biometriaHLIN[1] }}</td>
            <td align="center">{{ $data->biometriaHLIN[2] }}</td>
        </tr>
        <tr class="result">
            <td align="left">MONOCITOS</td>
            <td align="center">{{ $data->biometriaHMON[0] }}</td>
            <td align="center">{{ $data->biometriaHMON[1] }}</td>
            <td align="center">{{ $data->biometriaHMON[2] }}</td>
        </tr>
        <tr class="result">
            <td align="left">EOSINOFILOS</td>
            <td align="center">{{ $data->biometriaHEOS[0] }}</td>
            <td align="center">{{ $data->biometriaHEOS[1] }}</td>
            <td align="center">{{ $data->biometriaHEOS[2] }}</td>
        </tr>
        <tr class="result">
            <td align="left">BASOFILOS</td>
            <td align="center">{{ $data->biometriaHBAS[0] }}</td>
            <td align="center">{{ $data->biometriaHBAS[1] }}</td>
            <td align="center">{{ $data->biometriaHBAS[2] }}</td>
        </tr>
        <tr class="result">
            <td align="left">GLOBULOS ROJOS</td>
            <td align="center">{{ $data->biometriaHGR[0] }}</td>
            <td align="center">{{ $data->biometriaHGR[1] }}</td>
            <td align="center">{{ $data->biometriaHGR[2] }}</td>
        </tr>
        <tr class="result">
            <td align="left">HEMOGLOBINA</td>
            <td align="center">{{ $data->biometriaHEMO[0] }}</td>
            <td align="center">{{ $data->biometriaHEMO[1] }}</td>
            <td align="center">{{ $data->biometriaHEMO[2] }}</td>
        </tr>
        <tr class="result">
            <td align="left">VOLUMEN CORPUSCULAR MEDIO</td>
            <td align="center">{{ $data->biometriaHVCM[0] }}</td>
            <td align="center">{{ $data->biometriaHVCM[1] }}</td>
            <td align="center">{{ $data->biometriaHVCM[2] }}</td>
        </tr>
        <tr class="result">
            <td align="left">HB CORPUSCULAR MEDIA</td>
            <td align="center">{{ $data->biometriaHHB[0] }}</td>
            <td align="center">{{ $data->biometriaHHB[1] }}</td>
            <td align="center">{{ $data->biometriaHHB[2] }}</td>
        </tr>
        <tr class="result">
            <td align="left">CONC. HB CORPUSCULAR</td>
            <td align="center">{{ $data->biometriaHCOR[0] }}</td>
            <td align="center">{{ $data->biometriaHCOR[1] }}</td>
            <td align="center">{{ $data->biometriaHCOR[2] }}</td>
        </tr>
        <tr class="result">
            <td align="left">RDW CV</td>
            <td align="center">{{ $data->biometriaHRDW[0] }}</td>
            <td align="center">{{ $data->biometriaHRDW[1] }}</td>
            <td align="center">{{ $data->biometriaHRDW[2] }}</td>
        </tr>
        <tr class="result">
            <td align="left">PLAQUETAS</td>
            <td align="center">{{ $data->biometriaHPLA[0] }}</td>
            <td align="center">{{ $data->biometriaHPLA[1] }}</td>
            <td align="center">{{ $data->biometriaHPLA[2] }}</td>
        </tr>
        <tr>
            <td align="left" style="font-size: 12px;  padding-top: 8px;"></td>
            <td align="center" style="font-size: 12px; font-weight: bold; padding-top: 8px;">Valores confirmados (*)
            </td>
            <td align="center" style="font-size: 12px;  padding-top: 8px;"></td>
            <td align="center" style="font-size: 12px;  padding-top: 8px;"></td>
        </tr>
    </table>
    <table style="width: 100%; margin-top: 0.5cm; border-spacing: 0;">
        <tr style="background:#75C4DD">
            <td align="left" style="padding-left:5px; font-weight: bold;">QUIMICA SANGUINEA</td>
            <td align="center" style="padding: 0; font-weight: bold;">RESULTADO</td>
            <td align="center" style="padding: 0; font-weight: bold;">UNIDAD</td>
            <td align="center" style="padding: 0; font-weight: bold;">V. de REF</td>
        </tr>
        <tr class="result">
            <td align="left">GLUCOSA</td>
            <td align="center">{{ $data->quimicaGLU[0] }}</td>
            <td align="center">{{ $data->quimicaGLU[1] }}</td>
            <td align="center">{{ $data->quimicaGLU[2] }}</td>
        </tr>
        <tr class="result">
            <td align="left">UREA</td>
            <td align="center">{{ $data->quimicaURE[0] }}</td>
            <td align="center">{{ $data->quimicaURE[1] }}</td>
            <td align="center">{{ $data->quimicaURE[2] }}</td>
        </tr>
        <tr class="result">
            <td align="left">CREATININA</td>
            <td align="center">{{ $data->quimicaCRE[0] }}</td>
            <td align="center">{{ $data->quimicaCRE[1] }}</td>
            <td align="center">{{ $data->quimicaCRE[2] }}</td>
        </tr>
        <tr class="result">
            <td align="left">COLESTEROL</td>
            <td align="center">{{ $data->quimicaCOL[0] }}</td>
            <td align="center">{{ $data->quimicaCOL[1] }}</td>
            <td align="center">{{ $data->quimicaCOL[2] }}</td>
        </tr>
        <tr class="result">
            <td align="left">TRIGLICERIDOS</td>
            <td align="center">{{ $data->quimicaTRIG[0] }}</td>
            <td align="center">{{ $data->quimicaTRIG[1] }}</td>
            <td align="center">{{ $data->quimicaTRIG[2] }}</td>
        </tr>
        <tr class="result">
            <td align="left">TGO</td>
            <td align="center">{{ $data->quimicaTGO[0] }}</td>
            <td align="center">{{ $data->quimicaTGO[1] }}</td>
            <td align="center">{{ $data->quimicaTGO[2] }}</td>
        </tr>
        <tr class="result">
            <td align="left">TGP</td>
            <td align="center">{{ $data->quimicaTGP[0] }}</td>
            <td align="center">{{ $data->quimicaTGP[1] }}</td>
            <td align="center">{{ $data->quimicaTGP[2] }}</td>
        </tr>
    </table>
    <div class="page-break"></div>
    <table style="width: 100%; margin-top: 50px; border-spacing: 0;">
        <tr style="background:#75C4DD">
            <td align="left" style="padding-left:5px; font-weight: bold;">HORMONAS</td>
            <td align="center" style="padding: 0; font-weight: bold;">RESULTADO</td>
            <td align="center" style="padding: 0; font-weight: bold;">UNIDAD</td>
            <td align="center" style="padding: 0; font-weight: bold;">V. de REF</td>
        </tr>
        <tr class="result">
            <td align="left">TSH</td>
            <td align="center">{{ $data->hormonasTSH[0] }}</td>
            <td align="center">{{ $data->hormonasTSH[1] }}</td>
            <td align="center">{{ $data->hormonasTSH[2] }}</td>
        </tr>
        <tr class="result">
            <td align="left">T3 Total</td>
            <td align="center">{{ $data->hormonasT3[0] }}</td>
            <td align="center">{{ $data->hormonasT3[1] }}</td>
            <td align="center">{{ $data->hormonasT3[2] }}</td>
        </tr>
        <tr class="result">
            <td align="left">T4 Total</td>
            <td align="center">{{ $data->hormonasT4[0] }}</td>
            <td align="center">{{ $data->hormonasT4[1] }}</td>
            <td align="center">{{ $data->hormonasT4[2] }}</td>
        </tr>
              
    </table>
    <table style="width: 100%; margin-top: 50px; border-spacing: 0;">
        <tr style="background:#75C4DD">
            <td align="left" style="padding-left:5px; font-weight: bold;">ELECTROLITOS</td>
            <td align="center" style="padding: 0; font-weight: bold;">RESULTADO</td>
            <td align="center" style="padding: 0; font-weight: bold;">UNIDAD</td>
            <td align="center" style="padding: 0; font-weight: bold;">V. de REF</td>
        </tr>
        <tr class="result">
            <td align="left">CALCIO TOTAL</td>
            <td align="center">{{ $data->electrolitosCTOL[0] }}</td>
            <td align="center">{{ $data->electrolitosCTOL[1] }}</td>
            <td align="center">{{ $data->electrolitosCTOL[2] }}</td>
        </tr>
                  
    </table>
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


</body>

</html>
