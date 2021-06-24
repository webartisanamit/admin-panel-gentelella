<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin-Panel</title>
    <link href="{{ asset('assets/vendors/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendors/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendors/nprogress/nprogress.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendors/animate.css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendors/iCheck/skins/flat/green.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendors/jqvmap/dist/jqvmap.min.css') }}" rel="stylesheet"/>
    <link href="{{ asset('assets/vendors/bootstrap-daterangepicker/daterangepicker.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/custom.css') }}" rel="stylesheet">
    @notify_css
    @yield('extra_styles')
</head>

<body class="nav-md">
    <div class="container body">
        <div class="main_container">
            @include('includes.admin_sidebar')
            @include('includes.admin_header')
            <div class="right_col" role="main">
                @yield('content')
            </div>
            @include('includes.admin_footer')
        </div>
    </div>

    <script src="{{ asset('assets/vendors/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/fastclick/lib/fastclick.js') }}"></script>
    <script src="{{ asset('assets/vendors/nprogress/nprogress.js') }}"></script>
    <script src="{{ asset('assets/vendors/Chart.js/dist/Chart.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/gauge.js/dist/gauge.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/iCheck/icheck.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/skycons/skycons.js') }}"></script>
    <script src="{{ asset('assets/vendors/Flot/jquery.flot.js') }}"></script>
    <script src="{{ asset('assets/vendors/Flot/jquery.flot.pie.js') }}"></script>
    <script src="{{ asset('assets/vendors/Flot/jquery.flot.time.js') }}"></script>
    <script src="{{ asset('assets/vendors/Flot/jquery.flot.stack.js') }}"></script>
    <script src="{{ asset('assets/vendors/Flot/jquery.flot.resize.js') }}"></script>
    <script src="{{ asset('assets/vendors/flot.orderbars/js/jquery.flot.orderBars.js') }}"></script>
    <script src="{{ asset('assets/vendors/flot-spline/js/jquery.flot.spline.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/flot.curvedlines/curvedLines.js') }}"></script>
    <script src="{{ asset('assets/vendors/DateJS/build/date.js') }}"></script>
    <script src="{{ asset('assets/vendors/jqvmap/dist/jquery.vmap.js') }}"></script>
    <script src="{{ asset('assets/vendors/jqvmap/dist/maps/jquery.vmap.world.js') }}"></script>
    <script src="{{ asset('assets/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js') }}"></script>
    <script src="{{ asset('assets/vendors/moment/min/moment.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
    <script src="{{ asset('assets/vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/jquery.hotkeys/jquery.hotkeys.js') }}"></script>
    <script src="{{ asset('assets/vendors/google-code-prettify/src/prettify.js') }}"></script>
    <script src="{{ asset('assets/vendors/jquery.tagsinput/src/jquery.tagsinput.js') }}"></script>
    <script src="{{ asset('assets/vendors/switchery/dist/switchery.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/select2/dist/js/select2.full.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/parsleyjs/dist/parsley.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/autosize/dist/autosize.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/starrr/dist/starrr.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>
    @yield('extra_scripts')
</body>
</html>
