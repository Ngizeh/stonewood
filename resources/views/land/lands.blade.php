@extends('layouts.master')

@section('content')

    @include('layouts.banner')

    <div class="inside-banner">
        <div class="container">
<<<<<<< HEAD
           <span class="pull-right">
            <a href="/">Home</a> /Land <a href="{{url('lands/development')}}">/ Development</a> <a href="{{url('lands/sales')}}">/ For Sale</a>
            </span>
=======
            <span class="pull-right"><a href="/">Home</a> /Land</span>
>>>>>>> 5273d0759c41edc75fff2be7d4e1b2d0c1a50782
            <h2>Land Properties</h2>
        </div>
    </div>
    <div class="container login">
<<<<<<< HEAD
=======
        @include('land.pills')
>>>>>>> 5273d0759c41edc75fff2be7d4e1b2d0c1a50782
        <hr>
        @include('partials.details')
    </div>

@stop