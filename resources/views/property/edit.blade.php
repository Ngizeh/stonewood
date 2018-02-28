@extends('layouts.master')
@section('content')
    <div class="inside-banner">
            <div class="container">
                <h2>Edit {{$property->title}}</h2>
            </div>
        </div>


    <div class="container login">
        <form method="post" action="/property/{{$property->id}}" class="form-horizontal">
            {{ method_field('patch') }}
            @include('layouts.form')

        <div class="row">
            <div class="col-md-5">
                <a href="{{'/user_account'}}" >Back</a>
            </div>
            <div class="col-md-6 offset-2 form-group">
                <button type="submit" class="btn btn-primary ">Update Property</button>
            </div>
        </div>
        </form>

    </div>

@stop