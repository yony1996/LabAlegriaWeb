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

    <table style="width: 100%; margin-top: 1cm; border-spacing:0;">
        <tr style="width: 100%;">
            <th align="left" colspan="4" style="padding-left: 4cm; background: #75C4DD;">DATOS PACIENTE</th>

        </tr>
        <tr style="border-top: 1px solid black;">
            <td style="font-size: 10px; padding-top: 8px;">NOMBRES:</td>
            <td style="font-size: 10px; padding-top: 8px;"></td>
            <td style="font-size: 10px; padding-top: 8px;"></td>
            <td style="font-size: 10px; padding-top: 8px;">MEDICO SOLICITANTE:</td>
            <td style="font-size: 10px; padding-top: 8px;"></td>

        </tr>
        <tr style="border-top: 1px solid black;">
            <td style="font-size: 10px; padding-top: 8px;">CEDULA:</td>
            <td style="font-size: 10px; padding-top: 8px;"></td>
            <td style="font-size: 10px; padding-top: 8px;"></td>
            <td style="font-size: 10px; padding-top: 8px;">FECHA TOMA DE MUESTRA:</td>
            <td style="font-size: 10px; padding-top: 8px;"></td>

        </tr>
        <tr style="border-top: 1px solid black;">
            <td style="font-size: 10px; padding-top: 8px;">EDAD:</td>
            <td style="font-size: 10px; padding-top: 8px;"></td>
            <td style="font-size: 10px; padding-top: 8px;"></td>
            <td style="font-size: 10px; padding-top: 8px;">FECHA DE VALIDACIÓN</td>
            <td style="font-size: 10px; padding-top: 8px;"></td>
        </tr>
        <tr style="border-top: 1px solid black;">
            <td style="font-size: 10px; padding-top: 8px;">GENERO:</td>
            <td style="font-size: 10px; padding-top: 8px;"></td>
            <td style="font-size: 10px; padding-top: 8px;"></td>
        </tr>
    </table>

    <table style="width: 100%; margin-top: 1cm; border-spacing: 0;">
        <tr style="background:#75C4DD">
            <td align="left" colspan="2" style="padding-left:2cm; font-weight: bold;">HECES</td>
            <td align="center" style="padding: 0; margin-left: 8px; font-weight: bold;">UNIDAD</td>
            <td align="center" style="padding: 0; margin-left: 8px; font-weight: bold;">V. de REF</td>
        </tr>
        <tr>
            <td align="left" style="padding-top: 10px; margin-left: 8px; font-weight: bold;">EXAMEN FISICO</td>
        </tr>
        <tr style="border-top: 1px solid black;">
            <td align="left" colspan="1" style="font-size: 14px;  padding-top: 8px;">Color:</td>
            <td align="center" style="font-size: 14px;  padding-top: 8px;">cafe</td>
            <td align="center" style="font-size: 14px;  padding-top: 8px;">Consistencia:</td>
            <td align="center" style="font-size: 14px;  padding-top: 8px;">pastosa</td>
        </tr>
        <tr style="border-top: 1px solid black;">
            <td align="left" colspan="1" style="font-size: 14px;  padding-top: 8px;">Aspecto:</td>
            <td align="center" style="font-size: 14px;  padding-top: 8px;">Heterogeneo</td>
            <td align="center" style="font-size: 14px;  padding-top: 8px;">Restos Alimenticios:</td>
            <td align="center" style="font-size: 14px;  padding-top: 8px;">+</td>
        </tr>
        <tr>
            <td align="left" style="padding-top: 1cm; margin-left: 8px; font-weight: bold;">EXAMEN MICROSCOPICO</td>
        </tr>
        <tr>
            <td align="left" style="font-size: 14px;  padding-top: 8px;"></td>
            <td align="left" style="font-size: 14px;  padding-top: 8px;">Almidon:</td>
            <td align="left" style="font-size: 14px;  padding-top: 8px;">+</td>
        </tr>
        <tr>
            <td align="left" style="font-size: 14px;  padding-top: 8px;"></td>
            <td align="left" style="font-size: 14px;  padding-top: 8px;">Levadura:</td>
            <td align="left" style="font-size: 14px;  padding-top: 8px;">+</td>
        </tr>
        <tr>
            <td align="left" style="font-size: 14px;  padding-top: 8px;"></td>
            <td align="left" style="font-size: 14px;  padding-top: 8px;">Grasas:</td>
            <td align="left" style="font-size: 14px;  padding-top: 8px;">+</td>
        </tr>
        <tr>
            <td align="left" style="font-size: 14px;  padding-top: 8px;"></td>
            <td align="left" style="font-size: 14px;  padding-top: 8px;">Flora Bacteriana:</td>
            <td align="left" style="font-size: 14px;  padding-top: 8px;">Normal</td>
        </tr>
        <tr>
            <td align="center" style="font-size: 14px;  padding-top: 8px;">Parásitos:</td>
            <td align="left" style="font-size: 14px;  padding-top: 8px;">E.nana +</td>
            <td align="left" style="font-size: 14px;  padding-top: 8px;"></td>
        </tr>
    </table>
    <p style="font-size: 14px; font-weight: bold; font-style:italic; margin-top:5cm;">Validado por: MSc.BQ.Alvaro
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
