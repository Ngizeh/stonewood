@extends('layouts.master')

@section('content')

    @include('layouts.banner')

    <div class="inside-banner">
        <div class="container">
            <span class="pull-right"><a href="/">Home</a> / All Properties</span>
            <h2>Search</h2>
        </div>
    </div>

    <div class="container login">
        @if($properties->count())
        @include('partials.details')
            @else
            <h2>We don't have that Property Right Now</h2>
            @endif
    </div>


@stop