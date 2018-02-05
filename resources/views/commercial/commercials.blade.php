@extends('layouts.master')

@section('content')

    @include('layouts.banner')

    <div class="inside-banner">
        <div class="container">
            <span class="pull-right">
                <a href="/">Home</a> /Commercial <a href="{{url('commercials/rentals')}}">/ Rentals</a> <a href="{{url('commercials/sales')}}">/ For Sale</a>
            </span>
            <h2>Commercial Properties</h2>
        </div>
    </div>
  <div class="container login">
      <hr>
      @include('partials.details')
  </div>

@stop