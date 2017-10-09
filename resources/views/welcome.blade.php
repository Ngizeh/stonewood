@extends('layouts.master')

@section('content')
    <div class="picture">
        <img src="{{asset('images/slide3.jpg')}}" alt="homepage" width="100%" height="480px">
        <div class="centered">
            Excellent Agents, Outstanding Results.
        </div>

    </div>
    <div class="container about" id="about">
        <h2>Home Assured</h2>
        <p>Home assured takes the pride in offering quality Real estate services throughout the country, We have
            been in this business for 8 years in the sector and with a combined experience of the 20 years in real
            estate practice
        </p>
        <p> Home Assured has created a strong clientele by treating both buyers and sellers as investors
        Home Assured will and can deliver an effective and efficient real estate services through our diverse
        and we well experienced team.
        </p> 
    </div>
    <hr>
    <div class="container project" id="property">
        <h1>Projects </h1>
        <div class="row">
            <hr>
                <div class="col-md-6 ">
                    <a href="{{ url('/property') }}">
                    <div class="thumbnail">
                        <img src="{{asset('images/image1.jpeg')}}" alt="Apartment">
                        <div class="caption">
                            <h3>Katheru Road Apartment</h3>
                            <p>Fully finished Spacious 3 Bedroom Apartment</p>
                            <p>Letting Price: Ksh. 90,000</p>
                        </div>
                    </div>
                    </a>
                </div>
                <div class="col-md-6">
                        <div class="thumbnail godown">
                        <img src="{{asset('images/lift.jpeg')}}" alt="Go Down" width="450" height="240">
                        <div class="caption">
                            <h3>Lift Apartment</h3>
                            <p>Fully Funished apartment with a lift</p>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{--<div class="container">--}}
        {{--<div class="row">--}}
            {{--<div class="row">--}}
                {{--<div class="col-sm-6 col-md-4">--}}
                    {{--<div class="thumbnail">--}}
                        {{--<img src="{{asset('images/image1.jpeg')}}" alt="...">--}}
                        {{--<div class="caption">--}}
                            {{--<h3>Thumbnail label</h3>--}}
                            {{--<p>...</p>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="col-sm-6 col-md-4">--}}
                    {{--<div class="thumbnail">--}}
                        {{--<img src="{{asset('images/image2.jpeg')}}" alt="...">--}}
                        {{--<div class="caption">--}}
                            {{--<h3>Thumbnail label</h3>--}}
                            {{--<p>...</p>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="col-sm-6 col-md-4">--}}
                    {{--<div class="thumbnail">--}}
                        {{--<img src="{{asset('images/image3.jpeg')}}" alt="...">--}}
                        {{--<div class="caption">--}}
                            {{--<h3>Thumbnail label</h3>--}}
                            {{--<p>...</p>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<p>See More</p>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}

@stop