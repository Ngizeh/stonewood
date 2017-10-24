@extends('layouts.master')

@section('content')
    <div class="welcome">
        <img src="{{asset('images/slide3.jpg')}}" alt="homepage" width="100%" height="480px">
        <div class="container centered">
            Excellent Agents, Outstanding Results.
        </div>

    </div>
    <div class="container-fluid wording">
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
    </div>
    <hr>
    <div class="container project" id="property">
        <h1 class="">Properties </h1>
        <div class="row">
            <hr>
            <div class="col-md-6 ">
                <div class="thumbnail">
                    <a href="{{ url('property') }}">
                        <img src="{{asset('images/image1.jpeg')}}" alt="Apartment">
                    </a>
                    <div class="caption">
                        <h3>Hatheru Road Apartment</h3>
                        <h5><strong>Letting Price: Ksh. 90,000</strong></h5>
                        <p>A tastefully finished spacious 3 bedroom apartment, all ensuite.
                            Located along Hatheru Road, with a semi-detached DSQ.Amenities include Gym, swimming pool,
                            2 parking...<a href='{{url('property')}}'>[See More]</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="thumbnail godown">
                    <img src="{{asset('images/1508140758-IMG_20171016_100848.jpg')}}" alt="Go Down">
                    <div class="caption">
                        <h3>Peponi Property</h3>
                        <h5><strong>Letting Price: Ksh. 400,000</strong></h5>
                        <p>6 bed all ensuite house, guest washroom, separate dining area,
                            family room, spacious kitchen, wooden floor,
                            stairs and rail finish, DSQ garage, with a matures lush green
                            trees....<a href='{{url('property')}}'>[Read More]</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>


@stop