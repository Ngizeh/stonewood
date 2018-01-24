<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @yield('facebook_meta')
    <title>Home Assured Property</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/swiper.min.css')}}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.2.0/dropzone.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

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
@yield('scripts.footer')
<script type="text/javascript" src="{{asset('js/app.js')}}"></script>
<script src="{{asset('Front/owl-carousel/owl.carousel.js')}}"></script>
<script type="text/javascript" src="{{asset('Front/slitslider/js/modernizr.custom.79639.js')}}"></script>
<script type="text/javascript" src="{{asset('Front/slitslider/js/jquery.ba-cond.min.js')}}"></script>
<script type="text/javascript" src="{{asset('Front/slitslider/js/jquery.slitslider.js')}}"></script>
</body>
</html>