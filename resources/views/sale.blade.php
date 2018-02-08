@extends('layouts.master')

@section('content')

    @include('layouts.banner')

    <div class="inside-banner">
        <div class="container">
            <span class="pull-right"><a href="/">Home</a> / Sale</span>
            <h2>Properties For Sale</h2>
        </div>
    </div>

    <div class="container login">
        <div class="row">
            @include('partials.details')
        </div>
    </div>
@stop

