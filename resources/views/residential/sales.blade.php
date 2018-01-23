@extends('layouts.master')

@section('content')

    <div class="container login">
        <h1><a href="{{url('residentials')}}">Residential Properties</a></h1>
        <h3>Residential Properties For Sale</h3>
        <hr>
        @include('partials.details')
    </div>


@stop