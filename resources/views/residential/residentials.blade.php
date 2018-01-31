@extends('layouts.master')

@section('content')

    @include('layouts.banner')

    <div class="inside-banner">
        <div class="container">
            <span class="pull-right"><a href="/">Home</a> /Residential</span>
            <h2>Residential Properties</h2>
        </div>
    </div>

    <div class="container login">
        @include('residential.pills')
        <hr>
        @include('partials.details')
    </div>

@stop