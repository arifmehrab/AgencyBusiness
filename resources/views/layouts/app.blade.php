<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>
    <!-- Stylesheets -->
    <link href="https://fonts.googleapis.com/css2?family=Teko:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet">
    <link href="{{ asset('public/Frontend/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('public/Frontend/css/fontawesome-all.css') }}" rel="stylesheet">
    <link href="{{ asset('public/Frontend/css/owl.css') }}" rel="stylesheet">
    <link href="{{ asset('public/Frontend/css/flaticon.css') }}" rel="stylesheet">
    <link href="{{ asset('public/Frontend/css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('public/Frontend/css/jquery-ui.css') }}" rel="stylesheet">
    <link href="{{ asset('public/Frontend/css/jquery.fancybox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('public/Frontend/css/hover.css') }}" rel="stylesheet">
    <link href="{{ asset('public/Frontend/css/custom-animate.css') }}" rel="stylesheet">
    <link href="{{ asset('public/Frontend/css/style.css') }}" rel="stylesheet">
    <!-- rtl css -->
    <link href="{{ asset('public/Frontend/css/rtl.css') }}" rel="stylesheet">
    <!-- Responsive File -->
    <link href="{{ asset('public/Frontend/css/responsive.css') }}" rel="stylesheet">

    <!-- Color css -->
    <link rel="stylesheet" id="jssDefault" href="{{ asset('public/Frontend/css/colors/color-default.css') }}">
    @stack('css')
    <link rel="shortcut icon" href="{{ asset('public/Frontend/images/favicon.png') }}" id="fav-shortcut" type="image/x-icon">
    <link rel="icon" href="{{ asset('public/Frontend/images/favicon.png') }}" id="fav-icon" type="image/x-icon">

    <!-- Responsive Settings -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
</head>
<body>

    <div class="page-wrapper">

        <!-- Preloader -->
        <div class="preloader">
            <div class="icon"></div>
        </div>

    @include('Frontend.partials.header')
    @yield('page_content')
    @include('Frontend.partials.footer')

    </div>
    <!--End pagewrapper-->

    <a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-angle-up"></i></a>

    <script src="{{ asset('public/Frontend/js/jquery.js') }}"></script>
    <script src="{{ asset('public/Frontend/js/popper.min.js') }}"></script>
    <script src="{{ asset('public/Frontend/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('public/Frontend/js/TweenMax.js') }}"></script>
    <script src="{{ asset('public/Frontend/js/jquery-ui.js') }}"></script>
    <script src="{{ asset('public/Frontend/js/jquery.fancybox.js') }}"></script>
    <script src="{{ asset('public/Frontend/js/owl.js') }}"></script>
    <script src="{{ asset('public/Frontend/js/mixitup.js') }}"></script>
    <script src="{{ asset('public/Frontend/js/appear.js') }}"></script>
    <script src="{{ asset('public/Frontend/js/wow.js') }}"></script>
    <script src="{{ asset('public/Frontend/js/jQuery.style.switcher.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/Frontend/cdnjs.cloudflare.com/ajax/libs/js-cookie/2.1.2/js.cookie.min.js') }}">
    </script>
    <script src="{{ asset('public/Frontend/js/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('public/Frontend/js/custom-script.js') }}"></script>

    <script src="{{ asset('public/Frontend/js/lang.js') }}"></script>
    <script src="{{ asset('public/Frontend/js/color-switcher.js') }}"></script>
    @stack('js')

</body>

</html>
