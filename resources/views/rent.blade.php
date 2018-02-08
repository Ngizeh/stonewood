@extends('layouts.master')

@section('content')

    @include('layouts.banner')

    <div class="inside-banner">
        <div class="container">
            <span class="pull-right"><a href="/">Home</a> / Rentals</span>
            <h2>Properties For Rent</h2>
        </div>
    </div>

    <div class="container login">
        <div class="row">
            @include('partials.details')
        </div>
    </div>
@stop

