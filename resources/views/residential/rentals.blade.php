@extends('layouts.master')

@section('content')

    @include('layouts.banner')

    <div class="inside-banner">
        <div class="container">
            <span class="pull-right"><a href="/">Home</a> /Residential/Rentals</span>
            <h2>Residential Properties For Rentals</h2>
        </div>
    </div>
        @include('partials.details')
    @stop