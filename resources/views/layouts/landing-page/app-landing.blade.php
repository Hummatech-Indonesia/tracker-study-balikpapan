<!doctype html>
<html class="no-js" lang="en">


<!-- Mirrored from theme-land.com/sapp/demo/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 04 Dec 2023 10:09:51 GMT -->

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <!-- Title  -->
    <title>Tracer Study SMKN 2 Penajam Paser Utara</title>
    <!-- Favicon  -->
    <link rel="icon" href="{{ asset('LOGO SMKN 2.png') }}">
    <!-- ***** All CSS Files ***** -->
    <!-- Style css -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    @yield('style')
    <style>
        .border-custom {
            border: 7px solid #5D87FF !important;
        }

        a:hover {
            color: #5D87FF;
        }
    </style>
</head>

<body>
    <!--====== Scroll To Top Area Start ======-->
    <div id="scrollUp" title="Scroll To Top">
        <i class="fas fa-arrow-up"></i>
    </div>
    <!--====== Scroll To Top Area End ======-->

    <div class="main">
        <!-- ***** Header Start ***** -->
        @include('layouts.landing-page.header-landing')
        <!-- ***** Header End ***** -->
        @yield('content')
    </div>

    @include('layouts.landing-page.footer')

    <!-- ***** All jQuery Plugins ***** -->

    <!-- jQuery(necessary for all JavaScript plugins) -->
    <script src="{{ asset('assets/js/jquery/jquery.min.js') }}"></script>

    <!-- Bootstrap js -->
    <script src="{{ asset('assets/js/bootstrap/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap/bootstrap.min.js') }}"></script>

    <!-- Plugins js -->

    <script src="{{ asset('assets/js/plugins/plugins.min.js') }}"></script>
    <!-- Active js -->
    <script src="{{ asset('assets/js/active.js') }}"></script>
    @yield('scripts')
</body>


<!-- Mirrored from theme-land.com/sapp/demo/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 04 Dec 2023 10:10:04 GMT -->

</html>
