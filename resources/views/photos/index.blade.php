@extends('layouts.master')

@section('content')
    <div class="container head">
        <h2>All Properties</h2>
        <hr>
        <div class="row">
            <h3>To Let 3 Bedroom Apartment</h3>
            <div class="col-md-4">
                <img src="{{asset('images/image1.jpeg')}}" alt="Homes" width="380" height="250">
            </div>
            <div class="col-md-4">
                <img src="{{asset('images/bathtab.jpeg')}}" alt="Homes" width="380" height="250">
            </div>
            <div class="col-md-4">
                <img src="{{asset('images/sink.jpeg')}}" alt="Homes" width="380" height="250">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-4">
                <img src="{{asset('images/closet.jpeg')}}" alt="Homes" width="380" height="250">
            </div>
            <div class="col-md-4">
                <img src="{{asset('images/doorway.jpeg')}}" alt="Homes" width="380" height="250">
            </div>
            <div class="col-md-4">
                <img src="{{asset('images/door.jpeg')}}" alt="Homes" width="380" height="250">
            </div>
        </div>
        <div class="row desc">
            <div class="col-md-6">
                <p>A tastefully finished spacious 3 bedroom apartment, all ensuite. Located along Hatheru Road,
                    with a semi-detached DSQ. Amenities include Gym, swimming pool, 2 parking spot/unit, secure area,
                    wifi connectivity. All this in a quiet environment in capital underground and overhead water tanks
                    for each unit.
                </p>
                <p><strong>Letting Price  Ksh. 9000 + S.C. Ksh. 6,000</strong></p>
            </div>
        </div>
    </div>
@stop