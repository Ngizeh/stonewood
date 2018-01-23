@extends('layouts.master')

@section('content')

  <div class="container login">
      <h1>Land Properties</h1>
      @include('land.pills')
      <hr>
      @include('partials.details')

  </div>

@stop