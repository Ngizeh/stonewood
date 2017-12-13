@extends('layouts.master')

@section('content')
    <div class="container login">
        <div class="row">
            <div class="col-md-6">
                <h1>All Properties</h1>
                <hr>
            </div>
            <div class="col-md-6">
                @if(Auth::check())
                <a href="{{'/property/create'}}"
                   style="margin-top: 2em" class="btn btn-primary pull-right">Create A Property</a>
                    @endif
            </div>
        </div>
         @include('layouts.partial')
    </div>
@stop

