<!doctype html>
<html lang="en" class="scroll-smooth selection:text-white selection:bg-primary-500"
    x-bind:dir="setting.theme_scheme_direction" x-bind:class="[setting.theme_font_size, setting.theme_scheme]"
    x-data="settingInit">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title data-setting="app_name" x-text="setting.app_name + ' | Responsive Tailwind Admin Dashboard Template'">Qompac
        UI | Responsive Tailwind Admin Dashboard Template</title>

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo&amp;display=swap" rel="stylesheet">

    <!-- Config Options -->
    <meta name="setting_options"
        content='{&quot;saveLocal&quot;:&quot;sessionStorage&quot;,&quot;storeKey&quot;:&quot;quisetting-tailwind&quot;,&quot;setting&quot;:{&quot;app_name&quot;:&quot;Qompac UI&quot;,&quot;theme_scheme_direction&quot;:&quot;ltr&quot;,&quot;theme_scheme&quot;:&quot;light&quot;,&quot;theme_style_appearance&quot;:[],&quot;theme_font_size&quot;:&quot;theme-fs-md&quot;,&quot;page_layout&quot;:&quot;container&quot;,&quot;sidebar_color&quot;:&quot;sidebar-white&quot;,&quot;sidebar_type&quot;:[],&quot;sidebar_menu_style&quot;:&quot;sidebar-default navs-rounded-all&quot;}}'>

    <!-- Favicon -->
    <link rel="shortcut icon"
        href="https://templates.iqonic.design/product/qompac-ui-tailwind/tailwind/dist/assets/images/favicon.ico" />

    <!-- SwiperSlider css -->
    <link rel="stylesheet" href="{{ asset('assets-admin/vendor/swiper-slider/swiper-bundle.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets-admin/vendor/swiper-slider/swiper-bundle.min.css') }}" />

    <!-- SweetAlert2 css -->
    <link rel="stylesheet" href="{{ asset('assets-admin/vendor/sweetalert2/dist/sweetalert2.min.css') }}" />

    <!-- Uppy css -->
    <link rel="stylesheet" href="{{ asset('assets-admin/vendor/uppy/uppy.min.css') }}" />

    <!-- QuillEditor css -->
    <link rel="stylesheet" href="{{ asset('assets-admin/vendor/quill/quill.snow.css') }}" />

    <!-- Flatpickr css -->
    <link rel="stylesheet" href="{{ asset('assets-admin/vendor/flatpickr/dist/flatpickr.min.css') }}" />


    <!-- Choisejs css -->
    <link rel="stylesheet" href="{{ asset('assets-admin/vendor/choicejs/style/choices.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets-admin/vendor/sheperd/dist/css/sheperd.css') }}">


    <link rel="stylesheet" href="{{asset('assets-admin/css/core/libs.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets-admin/css/tailwinde209.css?v=1.0.0') }}">
    <link rel="stylesheet" href="{{ asset('assets-admin/css/responsivee209.css?v=1.0.0') }}">
    @yield('style')
</head>

<body class="overflow-x-hidden text-body bg-body dark:bg-dark-bg"
    x-bind:class="[setting.theme_transition, setting.theme_style_appearance.join(' ')]">
    <!-- loader Start -->
    <div id="loading">
        <div class="loader simple-loader">
            <div class="loader-body scroll-auto">
                <img src="{{ asset('assets-admin/images/loader.gif') }}" alt="loader" class="image-loader img-fluid ">
            </div>
        </div>
    </div>
    <!-- loader END -->
    @include('layouts.sidebar')
    <main class="main-content " x-data="{ data: true }">
        @include('layouts.navbar')
        @yield('content')
    </main>
    <script src="{{ asset('assets-admin/js/alpine/sweet-alert.js') }}"></script>
    <script src="{{ asset('assets-admin/js/alpine/swiper-slider.js') }}"></script>


    <script src="{{ asset('assets-admin/js/setting-panel.js') }}"></script>
    <!-- Library Bundle Script -->
    <script src="{{ asset('assets-admin/js/core/libs.min.js') }}"></script>

    <!-- External Library Bundle Script -->
    <script src="{{ asset('assets-admin/js/core/external.min.js') }}"></script>

    <!-- mapchart Script -->
    <script src="{{ asset('assets-admin/js/charts/vectore-chart.js') }}"></script>

    <!-- fslightbox Script -->
    <script src="{{ asset('assets-admin/js/plugins/fslightbox.js') }}"></script>

    <!-- App Script -->
    <script src="{{ asset('assets-admin/js/qompac-ui.js') }}"></script>

    <!-- Alpine Js-->
    <script src="{{ asset('assets-admin/js/plugins/alpine.js') }}" defer></script>

    <!-- Dashboard Chart & Slider -->
    <script src="{{ asset('assets-admin/js/charts/dashboard.js') }}" defer></script>


    <!-- Choisejs Script -->
    <script src="{{ asset('assets-admin/vendor/choicejs/script/choices.min.js') }}"></script>
    <script src="{{ asset('assets-admin/vendor/choicejs/script/choice.js') }}" defer></script>

    <!-- Tour plugin Start -->
    <script src="{{ asset('assets-admin/vendor/sheperd/dist/js/sheperd.min.js') }}"></script>
    <script src="{{ asset('assets-admin/js/plugins/tour.js') }}" defer></script>
    <!-- Slider-tab Script -->
    <script src="{{ asset('assets-admin/js/plugins/slider-tabs.js') }}"></script>
    @yield('scripts')
    <!-- Script Start -->
    <!-- Script End -->
</body>

<!-- Mirrored from templates.iqonic.design/product/qompac-ui-tailwind/tailwind/dist/dashboard/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 04 Dec 2023 09:50:05 GMT -->

</html>