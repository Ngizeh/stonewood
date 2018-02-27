@extends('layouts.user_auth')
@section('content')
    <div class="inside-banner">
            <div class="container">
                <h2>Create A Property</h2>
            </div>
        </div>
    <div class="container login">
        <form method="post" action="/property" class="form-horizontal">
            @include('layouts.form')
            <div class="row">
                <div class="col-md-4 form-group" >
                    <a href="{{'/user_account'}}"> Back</a>
                </div>
                <div class="col-md-6 col-md-offset-3 form-group">
                    <button type="submit" class="btn btn-success ">Create Property</button>
                </div>
            </div>
        </form>
    </div>
@endsection