@extends('layouts.master')

@section('content')

    <div class="container login">
        <h1><a href="{{url('commercials')}}">Commercial Properties</a></h1>
        <h3>Commercial Properties For Rentals</h3>
        <hr>
        @include('partials.details')
    </div>

@stop