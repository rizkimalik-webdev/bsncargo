<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="bsncargo">
    <meta name="author" content="Rizki Malik, and Bootstrap contributors">
    <meta name="generator" content="bsn">
    <title>{{ $title }}</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />

    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('public/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('public/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('public/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('public/site.webmanifest') }}">

    <!-- bootstrap -->
    <link rel="stylesheet" href="{{ asset('public/theme/plugins/bootstrap/bootstrap.min.css') }}">
    <!-- Slick Carousel -->
    <link rel="stylesheet" href="{{ asset('public/theme/plugins/slick/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('public/theme/plugins/slick/slick-theme.css') }}">
    <!-- FancyBox -->
    <link rel="stylesheet" href="{{ asset('public/theme/plugins/fancybox/jquery.fancybox.min.css') }}">
    <!-- fontawesome -->
    <link rel="stylesheet" href="{{ asset('public/theme/plugins/fontawesome/css/all.min.css') }}">
    <!-- animate.css -->
    <link rel="stylesheet" href="{{ asset('public/theme/plugins/animation/animate.min.css') }}">
    <!-- jquery-ui -->
    <link rel="stylesheet" href="{{ asset('public/theme/plugins/jquery-ui/jquery-ui.css') }}">
    <!-- timePicker -->
    <link rel="stylesheet" href="{{ asset('public/theme/plugins/timePicker/timePicker.css') }}">

    <!-- Stylesheets -->
    <link href="{{ asset('public/theme/css/style.css') }}" rel="stylesheet">

</head>

<body>
    <div class="page-wrapper">
        <x-partials.header-top :company="$company" />
        <x-partials.header-uper :company="$company" />
        <x-partials.main-navbar />
        
        <main>
            {{ $slot }}
        </main>

        <x-partials.main-footer :company="$company" :services="$services" :gallery="$gallery" />
    </div>


    <!-- scroll-to-top -->
    <div id="back-to-top" class="back-to-top">
        <i class="fa fa-angle-up"></i>
    </div>

    </div>
    <!--End pagewrapper-->


    <!--Scroll to top-->
    <div class="scroll-to-top scroll-to-target" data-target=".header-top">
        <span class="icon fa fa-angle-up"></span>
    </div>



    <!-- jquery -->
    <script src="{{ asset('public/theme/plugins/jquery.min.js') }}"></script>
    <!-- bootstrap -->
    <script src="{{ asset('public/theme/plugins/bootstrap/bootstrap.min.js') }}"></script>
    <!-- Slick Slider -->
    <script src="{{ asset('public/theme/plugins/slick/slick.min.js') }}"></script>
    <script src="{{ asset('public/theme/plugins/slick/slick-animation.min.js') }}"></script>
    <!-- FancyBox -->
    <script src="{{ asset('public/theme/plugins/fancybox/jquery.fancybox.min.js') }}" defer></script>
    <!-- jquery-ui -->
    <script src="{{ asset('public/theme/plugins/jquery-ui/jquery-ui.js') }}" defer></script>
    <!-- timePicker -->
    <script src="{{ asset('public/theme/plugins/timePicker/timePicker.js') }}" defer></script>

    <!-- script js -->
    <script src="{{ asset('public/theme/js/script.js') }}"></script>

</body>

</html>