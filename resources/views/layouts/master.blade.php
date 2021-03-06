<!doctype html>
<html lang="en">
<head>
    <title>Home Assured Limited</title>
    <link rel="shortcut icon" href="{{{ asset('images/HOME-ASSURED-LOGO.jpg') }}}">
    @yield('facebook_meta')
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script async defer
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDExvuhdF3x1-I8V4khCebfhkk9JAquZms&libraries=places"></script>
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.2.0/dropzone.css">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
            
    
            <link rel="stylesheet" href="{{asset('css/all.min.css')}}">      
    
            {{-- <link rel="stylesheet" href="{{asset('css/swiper.min.css')}}">
            
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <!-- Owl stylesheet -->
    <link rel="stylesheet" href="{{asset('Front/owl-carousel/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('Front/owl-carousel/owl.theme.css')}}">
    <!-- Owl stylesheet -->

    <!-- slitslider -->
    <link rel="stylesheet" type="text/css" href="{{asset('Front/slitslider/css/style.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('Front/slitslider/css/custom.css')}}"/> --}}
    <!-- slitslider -->

</head>
<body>
@yield('content')
<script src="{{asset('Front/owl-carousel/owl.carousel.js')}}"></script>
<script src="{{asset('js/app.js')}}"></script>
@yield('scripts.footer')
</body>
</html>