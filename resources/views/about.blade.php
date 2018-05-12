@extends('layouts.master')
@include('layouts.nav')
@section('content')
    @include('layouts.banner')

    <div class="inside-banner">
        <div class="container">
            <span class="pull-right"><a href="#">Home</a> / About Us</span>
            <h2>About Us</h2>
        </div>
        
    </div>

    <div class="container">
        <div class="spacer">
            <div class="row">
                <div class="col-lg-8  col-lg-offset-2">
                    {{--<img src="image/about.jpg" class="img-responsive thumbnail" alt="realestate">--}}
                    <p>
                        <strong> Home Assured Limited </strong> is an experienced group of real estate professionals providing a comprehensive 
                            range of real estate services for residential, 
                            corporate and industrial clients throughout Kenya and beyond. 
                            Our clients range from individuals and small businesses to large corporates.  
                    </p>
                    <p>
                     
                     <strong>Home Assured Limited</strong> offers a broad range of specialist and advisory services with respect to:
                    </p>
                    <ul>
                        <li> Residential Sales (city homes, apartments, country houses, coastal homes, internal, off
                            plan
                            acquisition)
                        </li>
                        <li>Residential Letting</li>
                        <li>Commercial Sales</li>
                        <li>Commercial Letting</li>
                        <li>New Development Sales (Residential and Commercial)</li>
                        <li>Property Management</li>
                        <li> Corporate Real Estate Portfolio Management and Lettings</li>
                        <li>Sourcing Property for Collective Buyers or Investment Funds</li>
                    </ul>
                    <p>
                            We take pride in our work and we are continuously seeking to improve our business model and 
                            capabilities to exceed our customers’ expectations. Client Satisfaction is the basis of everything 
                            that we do. Whether you are looking to buy, rent, or sell, you can be confident 
                            that <strong> Home Assured Limited</strong> can help you reach your goals.
                    </p>
                    <p>
                            Our team represents the new breed of real estate professionals who constantly embrace change and seek to 
                            improve the services that <strong> Home Assured Limited </strong> offers to its private and institutional clients.
                            With decades of combined real estate experience, our diverse team of professional consultants 
                            strives to consistently deliver results for our clients with absolute integrity and transparency.
                    </p>
                    <p>
                            We are committed to perform at the next level for our clients. Every single day we strive to deliver 
                            on this promise! We look forward to being of service to you.
                    </p>
                </div>

            </div>
        </div>
    </div>
    @include('layouts.footer')
@stop
