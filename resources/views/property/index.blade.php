@extends('layouts.master')
@include('layouts.nav')
@section('content')

    @include('layouts.banner')

    <div class="inside-banner">
        <div class="container">
            <span class="pull-right"><a href="/">Home</a> / All Properties</span>
            <h2>All Properties</h2>
        </div>
    </div>

    <div class="container login">
         @include('partials.details')
    </div>
    @include('layouts.footer')
@stop

