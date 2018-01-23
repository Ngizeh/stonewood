@extends('layouts.master')

@section('content')

    <div class="container login">
        <h1>Residential Properties</h1>
        @include('residential.pills')
        <hr>
        @include('partials.details')
    </div>

@stop