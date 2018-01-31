@extends('layouts.master')
@section('content')
    <br>
    <br>
<div class="spacer">
    <div class="inside-banner">
        <div class="container">
            <h2>Create A Property</h2>
        </div>
    </div>
</div>

    <div class="container login" xmlns="http://www.w3.org/1999/html">
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
