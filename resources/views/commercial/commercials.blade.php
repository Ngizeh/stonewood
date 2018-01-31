@extends('layouts.master')

@section('content')

    @include('layouts.banner')

    <div class="inside-banner">
        <div class="container">
            <span class="pull-right"><a href="/">Home</a> /Commercial</span>
            <h2>Commercial Properties</h2>
        </div>
    </div>
  <div class="container login">
     @include('commercial.pills')
      <hr>
      @include('partials.details')
  </div>

@stop