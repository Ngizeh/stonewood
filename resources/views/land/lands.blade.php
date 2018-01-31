@extends('layouts.master')

@section('content')

    @include('layouts.banner')

    <div class="inside-banner">
        <div class="container">
            <span class="pull-right"><a href="/">Home</a> /Land</span>
            <h2>Land Properties</h2>
        </div>
    </div>
    <div class="container login">
        @include('land.pills')
        <hr>
        @include('partials.details')
    </div>

@stop