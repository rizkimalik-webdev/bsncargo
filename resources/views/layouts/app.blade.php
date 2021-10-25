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

    <!-- bootstrap -->
    <link rel="stylesheet" href="{{ asset('theme/plugins/bootstrap/bootstrap.min.css') }}">
    <!-- Slick Carousel -->
    <link rel="stylesheet" href="{{ asset('theme/plugins/slick/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('theme/plugins/slick/slick-theme.css') }}">
    <!-- FancyBox -->
    <link rel="stylesheet" href="{{ asset('theme/plugins/fancybox/jquery.fancybox.min.css') }}">
    <!-- fontawesome -->
    <link rel="stylesheet" href="{{ asset('theme/plugins/fontawesome/css/all.min.css') }}">
    <!-- animate.css -->
    <link rel="stylesheet" href="{{ asset('theme/plugins/animation/animate.min.css') }}">
    <!-- jquery-ui -->
    <link rel="stylesheet" href="{{ asset('theme/plugins/jquery-ui/jquery-ui.css') }}">
    <!-- timePicker -->
    <link rel="stylesheet" href="{{ asset('theme/plugins/timePicker/timePicker.css') }}">

    <!-- Stylesheets -->
    <link href="{{ asset('theme/css/style.css') }}" rel="stylesheet">

</head>

<body>
    <div class="page-wrapper">
        <x-partials.header-top :mail="$mail" :whatsapp="$whatsapp" :facebook="$facebook" :twitter="$twitter" />
        <x-partials.header-uper :mail="$mail" :whatsapp="$whatsapp" :telp="$telp" />
        <x-partials.main-navbar />
        {{-- <x-slider />
        <x-call-to-action /> --}}

        <main>
            {{ $slot }}
        </main>

        <x-partials.main-footer />
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
    <script src="{{ asset('theme/plugins/jquery.min.js') }}"></script>
    <!-- bootstrap -->
    <script src="{{ asset('theme/plugins/bootstrap/bootstrap.min.js') }}"></script>
    <!-- Slick Slider -->
    <script src="{{ asset('theme/plugins/slick/slick.min.js') }}"></script>
    <script src="{{ asset('theme/plugins/slick/slick-animation.min.js') }}"></script>
    <!-- FancyBox -->
    <script src="{{ asset('theme/plugins/fancybox/jquery.fancybox.min.js') }}" defer></script>
    <!-- jquery-ui -->
    <script src="{{ asset('theme/plugins/jquery-ui/jquery-ui.js') }}" defer></script>
    <!-- timePicker -->
    <script src="{{ asset('theme/plugins/timePicker/timePicker.js') }}" defer></script>

    <!-- script js -->
    <script src="{{ asset('theme/js/script.js') }}"></script>

</body>

</html>