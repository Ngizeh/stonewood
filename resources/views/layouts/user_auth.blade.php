<!doctype html>
<html lang="en">
<head>
    <title>Home Assured Property</title>
    <link rel="shortcut icon" href="{{ asset('images/HOME-ASSURED-LOGO.jpg') }}">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.2.0/dropzone.css">
    <script async defer
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCk1StK_XufNPpiDk6vkfc5laTTXxyKzEo&libraries=places"></script>
</head>
<body>
@yield('content')
<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="{{asset('js/app.js')}}"></script>
@yield('scripts.footer')
</body>
</html>