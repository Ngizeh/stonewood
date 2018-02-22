@extends('layouts.master')

@section('content')

    @include('layouts.banner')

    <div class="inside-banner">
        <div class="container">
            <span class="pull-right">
                <a href="/">Home</a> / <a href="{{url('commercials')}}">Commercial</a> / Rental</span>
            <h2>Commercial Properties For Rental</h2>
        </div>
    </div>

    <div class="login">

        @include('partials.details')
    </div>

@stop