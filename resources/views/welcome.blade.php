@extends('layouts.master')

@section('content')
    <div class="welcome">
        <img src="{{asset('images/slide3.jpg')}}" alt="homepage" width="100%" height="480px">
        <div class="container centered">
            Excellent Agents, Outstanding Results.
        </div>

    </div>
    <div class="container-fluid wording">
        <div class="container home">
            <h2 style="color: #ff770e">Home Assured</h2>
            <p>
                HomeAssured Property primarily core value is sale of quality residential property in Kenya, Properties
                offers its expertise
                and client base in Kenya. Our team is committed to maintaining these high levels of professional service
                with unquestionable
                integrity and reliability whilst continually assessing the changing needs of the market place
            </p>
            <p>
                HomeAssured Property offers specialised real estate services in the residential, commercial and
                new development fields,covering sales and lettings as well as property management. An in-house advocate oversees property
                transactions from Letter of Offer through to final transfer at the Deeds Registry.

            </p>

            <p>
                HomeAssured Property offers a broad range of specialist and advisory services with respect to:
            </p>
            <p>
            <ul>
              <li>  Residential Sales (city homes, apartments, country houses, coastal homes, internal, off plan
                acquisition)</li>
                <li>Residential Letting</li>
                <li>Commercial Sales</li>
                <li>Commercial Letting</li>
                <li>New Development Sales (Residential and Commercial)</li>
                <li>Property Management</li>
                <li> Corporate Real Estate Portfolio Management and Lettings</li>
                <li>Sourcing Property for Collective Buyers or Investment Funds</li>
            </ul>
            </p>
            <p>
                Our extensive exposure to prospective local and international clients is thanks to our team of able and
                professional property consultants who are driven by excellence and go above the call of duty to give our
                clients peace of mind.

                We are perfectly placed to help you find a space for you to call home and look forward to being of
                service
                to you.
            </p>
        </div>
    </div>
    <hr>
    <div class="container-fluid project" id="property">
        <h2 class="" style="padding-left: 3.5em;color: #ff770e">Featured Properties </h2>
        <div class="row">
            <hr>
            <div class="col-md-4 ">
                <div class="thumbnail">
                    <a href="{{ url('property') }}">
                        <img src="{{asset('images/image1.jpeg')}}" alt="Apartment">
                    </a>
                    <div class="caption">
                        <h3>Hatheru Road Apartment</h3>
                        <h5><strong>Letting Price: Ksh. 90,000</strong></h5>
                        <p>A tastefully finished spacious 3 bedroom apartment, all ensuite.
                            Located along Hatheru Road, with a semi-detached DSQ.Amenities include Gym, swimming pool,
                            2 parking spot/unit, secure area, wifi connectivity. All this in a quiet environment in the
                            capital..
                            <a href='{{url('property')}}'>[See More]</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="thumbnail godown">
                    <img src="{{asset('images/1508140758-IMG_20171016_100848.jpg')}}" alt="Go Down">
                    <div class="caption">
                        <h3>Peponi Property</h3>
                        <h5><strong>Letting Price: Ksh. 400,000</strong></h5>
                        <br>
                        <p>6 bed all ensuite house, guest washroom, separate dining area,
                            family room, spacious kitchen, wooden floor,
                            stairs and rail finish, DSQ garage, with a matures lush green
                            trees sitting on half an acre located along Peponi road
                            ..<a href='{{url('property')}}'>[See More]</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="thumbnail godown">
                    <img src="{{asset('images/springs.jpg')}}" alt="Rosslyn" height="">
                    <div class="caption">
                        <h3> Rosslyn Springs</h3>
                        <h5><strong>Letting Price: $ 3,800</strong></h5>
                        <p>The bedrooms are all en suite,each unit boasts a fully
                            fitted Italian ...<a href='{{url('property')}}'>[See More]</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>


@stop