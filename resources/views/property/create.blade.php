@extends('layouts.master')
@section('content')
    <div class="container login" xmlns="http://www.w3.org/1999/html">
        <h2>Upload A Property</h2>
        <hr>
        <form method="post" action="/property" class="form-horizontal">
          @include('layouts.form')
        <div class="row">
            <div class="col-md-5 form-group" >
                <a href="{{'/property'}}" class="btn btn-success">Back</a>
            </div>
            <div class="col-md-6 offset-2 form-group">
                <button type="submit" class="btn btn-success ">Create Property</button>
            </div>
        </div>
        </form>
    </div>
@endsection
