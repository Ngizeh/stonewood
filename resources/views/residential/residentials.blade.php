@extends('layouts.master')

@section('content')

    @include('layouts.banner')

    <div class="inside-banner">
        <div class="container">
           <span>
            <a href="/">Home</a> /Residential <a href="{{url('residentials/rentals')}}">/ Rentals</a> <a href="{{url('residentials/sales')}}">/ For Sale</a>
            </span>
            <h2>Residential Properties</h2>
        </div>
    </div>

    <div class="container login">
        <hr>
        @include('partials.details')
    </div>

@stop