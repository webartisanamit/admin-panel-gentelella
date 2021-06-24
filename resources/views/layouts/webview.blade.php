<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Fuel-Delivery">
    <meta name="author" content="Creative Tim">
    <title>Fuel-Delivery</title>
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
    <!-- Icons -->
    <link rel="stylesheet" href="{{asset('assets/vendor/nucleo/css/nucleo.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/vendor/@fortawesome/fontawesome-free/css/all.min.css')}}" type="text/css">
    <!-- Page plugins -->
    <!-- Argon CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/argon.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/css/custom.css')}}" type="text/css">
    @notify_css
    <style media="screen">
        .mh-vh-100 {
            min-height: 100vh;
        }
    </style>
    @yield('extra_styles')
</head>

<body class="mh-vh-100">
    <!-- Main content -->
    <div class="mh-vh-100 bg-white p-3">

        @yield('content')

    </div>
    <!-- Argon Scripts -->
    <!-- Core -->
    <script src="{{asset('assets/vendor/jquery/dist/jquery.min.js')}}"></script>
    <script src="{{asset('assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
    <!-- Argon JS -->
    <script src="{{asset('assets/js/argon.min.js')}}"></script>
    <script src="{{asset('assets/js/custom.js')}}"></script>
    @yield('extra_scripts')
</body>
</html>
