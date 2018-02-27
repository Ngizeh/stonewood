<!doctype html>
<html lang="en">
<head>
    <title>Home Assured Property</title>
    <link rel="shortcut icon" href="{{{ asset('/home/ngizeh/stonewood/public/images/HOME-ASSURED-LOGO.jpg') }}}">
    @yield('facebook_meta')
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/swiper.min.css')}}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script async defer
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCk1StK_XufNPpiDk6vkfc5laTTXxyKzEo&libraries=places"></script>

    <!-- Owl stylesheet -->
    <link rel="stylesheet" href="{{asset('Front/owl-carousel/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('Front/owl-carousel/owl.theme.css')}}">
    <!-- Owl stylesheet -->

    <!-- slitslider -->
    <link rel="stylesheet" type="text/css" href="{{asset('Front/slitslider/css/style.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('Front/slitslider/css/custom.css')}}"/>
    <!-- slitslider -->

</head>
<body>
@include('layouts.nav')
@yield('content')

@include('layouts.footer')
<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="{{asset('Front/owl-carousel/owl.carousel.js')}}"></script>
<script src="{{asset('js/app.js')}}"></script>
@yield('scripts.footer')
</body>
</html>