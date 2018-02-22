@extends('layouts.master')

@section('content')

    @include('layouts.banner')

    <div class="inside-banner">
        <div class="container">
            <span class="pull-right">
                <a href="/">Home</a> / <a href="{{url('lands')}}">Land</a> / Development</span>
            <h2>Land Properties For Development</h2>
        </div>
    </div>

    <div class="login">

        @include('partials.details')
    </div>

@stop