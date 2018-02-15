@extends('layouts.master')

@section('content')

    @include('layouts.banner')

    <div class="inside-banner">
        <div class="container">
<<<<<<< HEAD
            <span class="pull-right">
                <a href="/">Home</a> /Commercial <a href="{{url('commercials/rentals')}}">/ Rentals</a> <a href="{{url('commercials/sales')}}">/ For Sale</a>
            </span>
=======
            <span class="pull-right"><a href="/">Home</a> /Commercial</span>
>>>>>>> 5273d0759c41edc75fff2be7d4e1b2d0c1a50782
            <h2>Commercial Properties</h2>
        </div>
    </div>
  <div class="container login">
<<<<<<< HEAD
=======
     @include('commercial.pills')
>>>>>>> 5273d0759c41edc75fff2be7d4e1b2d0c1a50782
      <hr>
      @include('partials.details')
  </div>

@stop