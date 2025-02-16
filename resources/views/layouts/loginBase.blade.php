<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>
        {{ env('APP_NAME') }}
    </title>
    <!-- Favicon -->
    <link href="{{ asset('dist/images/Logo.ico') }}" rel="icon" type="image/png">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <!-- Icons -->
    <link href="{{ asset('dist_argon/assets/js/plugins/nucleo/css/nucleo.css') }}" rel="stylesheet" />
    <link href="{{ asset('dist_argon/assets/js/plugins/@fortawesome/fontawesome-free/css/all.min.css') }}"
        rel="stylesheet" />
    <!-- CSS Files -->
    <link href="{{ asset('dist_argon/assets/css/argon-dashboard.css?v=1.1.2') }}" rel="stylesheet" />
</head>

<body class="bg-default">
    <div class="main-content">
        @yield('content')
    </div>
    <!--   Core   -->
    <script src="{{ asset('dist_argon/assets/js/plugins/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('dist_argon/assets/js/plugins/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <!--   Optional JS   -->
    @yield('js')
    <!--   Argon JS   -->
    <script src="{{ asset('dist_argon/assets/js/argon-dashboard.min.js?v=1.1.2') }}"></script>
    <script src="https://cdn.trackjs.com/agent/v3/latest/t.js"></script>
    <script>
        window.TrackJS &&
            TrackJS.install({
                token: "ee6fab19c5a04ac1a32a645abde4613a",
                application: "argon-dashboard-free"
            });
    </script>
</body>

</html>
