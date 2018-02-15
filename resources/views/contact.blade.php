@extends('layouts.master')

@section('content')

    @include('layouts.banner')
    <!-- banner -->
    <div class="inside-banner">
        <div class="container">
            <span class="pull-right"><a href="#">Home</a> / Contact Us</span>
            <h2>Contact Us</h2>
        </div>
    </div>
    <!-- banner -->
    <div class="container">
        <div class="spacer">
         <form method="post" action="/contact">
             {{csrf_field()}}
            <div class="row contact">
                <div class="col-md-6 col-lg-offset-3 ">
                    @if(Session::has('success'))
                        <div class="alert alert-success">
                            {{ Session::get('success') }}
                        </div>
                    @endif

                    <h3> If you would like to leave us a message, Contact Us</h3>
                    <hr>
                    <input type="text" class="form-control" name="name" placeholder="Full Name">
                    <input type="email" class="form-control" name="email" placeholder="Email Address">
                    <input type="tel" class="form-control" name="phone_number" placeholder="Contact Number">
                    <textarea rows="6" class="form-control" name="message" placeholder="Message"></textarea>
                    <button type="submit" class="btn btn-success" name="Submit">Send Message</button>
                    <br>
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                </div>
            </div>
            </form>

            <div class="row contact">
                <div class="col-md-6 col-lg-offset-3 ">
                    <h3> If you would like to leave us a message, Contact Us</h3>
                    <hr>
                    <input type="text" class="form-control" placeholder="Full Name">
                    <input type="text" class="form-control" placeholder="Email Address">
                    <input type="text" class="form-control" placeholder="Contact Number">
                    <textarea rows="6" class="form-control" placeholder="Message"></textarea>
                    <button type="submit" class="btn btn-success" name="Submit">Send Message</button>
                </div>
            </div>

        </div>
    </div>
@stop