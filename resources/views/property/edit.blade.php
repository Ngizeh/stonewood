@extends('layouts.master')

@section('content')

    <div class="container login">

        <h2>Edit {{$property->title}}</h2>
        <hr>
        <form method="post" action="/property/{{$property->id}}" class="form-horizontal">
            {{ method_field('patch') }}
            @include('layouts.form')

        <div class="row">
            <div class="col-md-5">
                <a href="{{'/property'}}" class="btn btn-success">Back</a>
            </div>
            <div class="col-md-6 offset-2 form-group">
                <button type="submit" class="btn btn-primary ">Update Property</button>
            </div>
        </div>
        </form>

    </div>

@stop