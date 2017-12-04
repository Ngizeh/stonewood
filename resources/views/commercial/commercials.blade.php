@extends('layouts.master')

@section('content')

  <div class="container login">
      <h1>Commercial Properties</h1>
     @include('commercial.pills')
      <hr>
      @include('layouts.partial')
  </div>

@stop