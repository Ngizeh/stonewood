@extends('layouts.master')

@section('content')

    <div class="container login">
        <h1><a href="{{url('commercials')}}">Commercial Property</a></h1>
        <h3>Commercial Properties For Sale</h3>
        <hr>
        @include('layouts.partial')
    </div>


@stop