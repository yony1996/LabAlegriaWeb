<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Document</title>
    <style type="text/css" media="screen">
        @page {
            size: 76pt 144pt;

        }

        body {
            font-family: "Times New Roman", serif;
        }
    </style>
</head>

<body>

    @foreach ($hemato->biometriaHGB as $key => $value)
        <p>{{ $value }}</p>
    @endforeach

    {{-- {{$hemato->biometriaHGB[0]}}
    {{$hemato->biometriaHGB[1]}}
    {{$hemato->biometriaHGB[2]}} --}}

</body>

</html>
