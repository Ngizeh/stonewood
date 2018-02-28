@extends('layouts.master')
@include('layouts.nav')
@section('content')

    @include('layouts.banner')

    <div class="inside-banner">
        <div class="container">
            <span class="pull-right"><a href="/">Home</a> /<a href="/residentials">Residential</a> / Sales</span>
            <h2>Residential Properties For Sales</h2>
        </div>
    </div>
    <div class="contain login">
        @include('partials.details')
    </div>

    @include('layouts.footer')
@stop