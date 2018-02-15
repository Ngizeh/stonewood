@extends('layouts.master')

@section('content')

    @include('layouts.banner')

    <div class="inside-banner">
        <div class="container">
<<<<<<< HEAD
           <span>
            <a href="/">Home</a> /Residential <a href="{{url('residentials/rentals')}}">/ Rentals</a> <a href="{{url('residentials/sales')}}">/ For Sale</a>
            </span>
=======
            <span class="pull-right"><a href="/">Home</a> /Residential</span>
>>>>>>> 5273d0759c41edc75fff2be7d4e1b2d0c1a50782
            <h2>Residential Properties</h2>
        </div>
    </div>

    <div class="container login">
<<<<<<< HEAD
=======
        @include('residential.pills')
>>>>>>> 5273d0759c41edc75fff2be7d4e1b2d0c1a50782
        <hr>
        @include('partials.details')
    </div>

@stop