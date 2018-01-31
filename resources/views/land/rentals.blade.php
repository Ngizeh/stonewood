@extends('layouts.master')

@section('content')

    @include('layouts.banner')

    <div class="inside-banner">
        <div class="container">
            <span class="pull-right">
                <a href="/">Home</a> / <a href="{{url('lands')}}">Land</a> / Rental</span>
            <h2>Land Properties For Rental</h2>
        </div>
    </div>

    <div class="container login">

        @include('partials.details')
    </div>

@stop