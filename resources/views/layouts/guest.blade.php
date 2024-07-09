<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ $title }} {{$title ? '-' : ''}} {{ $settings->company_name }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="{{$settings->company_name}}">
        <link rel="shortcut icon" type="image/jpeg" href="/assets/favicon.png">
        <meta name="description" content="{{$settings->seo_description}}">
        <meta name="keywords" content="{{$settings->seo_tags}}" >
        
        <link rel="canonical" href="{{request()->url()}}" >


        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <link href="/assets/css/themify-icons.css" rel="stylesheet">
        <link href="/assets/css/flaticon.css" rel="stylesheet">
        <link href="/assets/css/magnific-popup.css" rel="stylesheet">
        <link href="/assets/css/animate.css" rel="stylesheet">
        <link href="/assets/css/owl.carousel.css" rel="stylesheet">
        <link href="/assets/css/owl.theme.css" rel="stylesheet">
        <link href="/assets/css/slick.css" rel="stylesheet">
        <link href="/assets/css/slick-theme.css" rel="stylesheet">
        <link href="/assets/css/swiper.min.css" rel="stylesheet">
        <link href="/assets/css/owl.transitions.css" rel="stylesheet">
        <link href="/assets/css/jquery.fancybox.css" rel="stylesheet">
        <link href="/assets/css/odometer-theme-default.css" rel="stylesheet">
        <link href="/assets/css/global.css" rel="stylesheet">
        <link href="/assets/css/style.css" rel="stylesheet">

        <script src="https://www.google.com/recaptcha/api.js?render={{env('RECAPTCHA_V3_SITE_KEY')}}"></script>

        @stack('meta')

        {!! $settings->header_scripts !!}

    </head>
    <body class="font-sans antialiased">

        <div class="page-wrapper">
            <!-- start preloader -->
            {{-- <div class="preloader">
                <div class="vertical-centered-box">
                    <div class="content">
                        <div class="loader-circle"></div>
                        <div class="loader-line-mask">
                            <div class="loader-line"></div>
                        </div>
                        <img src="assets/images/preloader.png" alt="">
                    </div>
                </div>
            </div> --}}

            @include('layouts.partials.header')

            {{ $slot }}

            @include('layouts.partials.footer')

        </div>


        <script src="/assets/js/jquery.min.js"></script>
        <!-- Plugins for this template -->
        <script src="/assets/js/modernizr.custom.js"></script>
        <script src="/assets/js/jquery-plugin-collection.js"></script>
        <script src="/assets/js/tw-elements.umd.min.js"></script>
        <script src="/assets/js/moving-animation.js"></script>
        <!-- Custom script for this template -->
        <script src="/assets/js/script.js"></script>
        
        {!! $settings->footer_scripts !!}

        @livewireScriptConfig 
    </body>
</html>
