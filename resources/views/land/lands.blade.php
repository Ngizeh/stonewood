@extends('layouts.master')

@section('content')

    @include('layouts.banner')

    <div class="inside-banner">
        <div class="container">
           <span class="pull-right">
            <a href="/">Home</a> /Land <a href="{{url('lands/development')}}">/ Development</a> <a href="{{url('lands/sales')}}">/ For Sale</a>
            </span>
            <h2>Land Properties</h2>
        </div>
    </div>
    <div class="container login">
        <hr>
        @include('partials.details')
    </div>

@stop