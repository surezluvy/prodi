<!DOCTYPE html>
<html lang="zxx">

<head>
    <!--================= Meta tag =================-->
    <meta charset="utf-8">
    <title>Home | Echooling - Online Education HTML Template</title>
    <meta name="description" content="">
    <!--================= Responsive Tag =================-->
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--================= Favicon =================-->
    <link rel="apple-touch-icon" href="{{ asset('assets/main/images/fav.png') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/main/images/fav.png') }}">
    <!--================= Bootstrap V5 css =================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/main/css/bootstrap.min.css') }}">
    <!--================= Menus css =================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/main/css/menus.css') }}">
    <!--================= Animate css =================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/main/css/animate.css') }}">
    <!--================= Owl Carousel css =================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/main/css/owl.carousel.css') }}">
    <!--================= Elegant icon css  =================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/main/fonts/elegant-icon.css') }}">
    <!--================= Magnific Popup css =================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/main/css/magnific-popup.css') }}">
    <!--================= Animations css =================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/main/css/animations.css') }}">
    <!--================= style css =================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/main/style.css') }}">
    <!--================= Custom Spacing css =================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/main/css/custom-spacing.css') }}">
    <!--================= Responsive css =================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/main/css/responsive.css') }}">
</head>

<body>
    <!--================= Preloader Section Start Here =================-->
    <div id="react__preloader">
        <div id="react__circle_loader"></div>
        <div class="react__loader_logo"><img src="{{ asset('assets/main/images/preload.png') }}" alt="Preload"></div>
    </div>
    <!--================= Preloader Section End Here =================-->

    <!--================= Header Section Start Here =================-->
    @include('home.includes.header')
    <!--================= Header Section End Here =================-->

    <!--================= Wrapper Start Here =================-->
    @yield('content')
    <!--================= Wrapper End Here =================-->

    <!--================= Footer Section Start Here =================-->
    @include('home.includes.footer')
    <!--================= Footer Section End Here =================-->

    <!--================= Scroll to Top Start =================-->
    <div id="backscrollUp" class="home">
        <span aria-hidden="true" class="arrow_carrot-up"></span>
    </div>
    <!--================= Scroll to Top End =================-->

    <!--================= Jquery latest version =================-->
    <script src="{{ asset('assets/main/js/jquery.min.js') }}"></script>
    <!--================= Modernizr js =================-->
    <script src="{{ asset('assets/main/js/modernizr-2.8.3.min.js') }}"></script>
    <!--================= Bootstrap js =================-->
    <script src="{{ asset('assets/main/js/bootstrap.min.js') }}"></script>
    <!--================= Owl Carousel js =================-->
    <script src="{{ asset('assets/main/js/owl.carousel.min.js') }}"></script>
    <!--================= Magnific Popup =================-->
    <script src="{{ asset('assets/main/js/jquery.magnific-popup.min.js') }}"></script>
    <!--================= Counter up js =================-->
    <script src="{{ asset('assets/main/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('assets/main/js/waypoints.min.js') }}"></script>
    <!--================= Wow js =================-->
    <script src="{{ asset('assets/main/js/wow.min.js') }}"></script>
    <!--================= menus js =================-->
    <script src="{{ asset('assets/main/js/menus.js') }}"></script>
    <!--================= Plugins js =================-->
    <script src="{{ asset('assets/main/js/plugins.js') }}"></script>
    <!--================= Main js =================-->
    <script src="{{ asset('assets/main/js/main.js') }}"></script>
</body>

</html>
