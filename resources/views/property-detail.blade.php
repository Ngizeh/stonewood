@extends('layouts.master')

@section('content')

    @include('layouts.banner')
    <!-- banner -->
    <div class="inside-banner">
        <div class="container">
            <span class="pull-right"><a href="{{url('/property')}}">Home</a> / Buy</span>
            <h2>Buy</h2>
        </div>
    </div>
    <!-- banner -->


    <div class="container">
        <div class="properties-listing spacer">

            <div class="row">
                <div class="col-lg-3 col-sm-4 hidden-xs">
                    <div class="hot-properties hidden-xs">
                        <h4>Hot Properties</h4>
                        <div class="row">
                            <div class="col-lg-4 col-sm-5"><img src="image/properties/4.jpg" class="img-responsive img-circle" alt="properties"/></div>
                            <div class="col-lg-8 col-sm-7">
                                <h5><a href="/property-detail">Integer sed porta quam</a></h5>
                                <p class="price">$300,000</p> </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 col-sm-5"><img src="image/properties/1.jpg" class="img-responsive img-circle" alt="properties"/></div>
                            <div class="col-lg-8 col-sm-7">
                                <h5><a href="/property-detail">Integer sed porta quam</a></h5>
                                <p class="price">$300,000</p> </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-4 col-sm-5"><img src="image/properties/3.jpg" class="img-responsive img-circle" alt="properties"/></div>
                            <div class="col-lg-8 col-sm-7">
                                <h5><a href="/property-detail">Integer sed porta quam</a></h5>
                                <p class="price">$300,000</p> </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-4 col-sm-5"><img src="image/properties/2.jpg" class="img-responsive img-circle" alt="properties"/></div>
                            <div class="col-lg-8 col-sm-7">
                                <h5><a href="/property-detail">Integer sed porta quam</a></h5>
                                <p class="price">$300,000</p> </div>
                        </div>

                    </div>

                </div>

                <div class="col-lg-9 col-sm-8 ">

                    <h2>2 room and 1 kitchen apartment</h2>
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="property-image">
                                <!-- Slider Starts -->
                                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                    <!-- Indicators -->
                                    <ol class="carousel-indicators hidden-xs">
                                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                        <li data-target="#myCarousel" data-slide-to="1" class=""></li>
                                        <li data-target="#myCarousel" data-slide-to="2" class=""></li>
                                        <li data-target="#myCarousel" data-slide-to="3" class=""></li>
                                    </ol>
                                    <div class="carousel-inner">
                                        <!-- Item 1 -->
                                        <div class="item active">
                                            <img src="image/properties/4.jpg" class="properties" alt="properties" />
                                        </div>
                                        <!-- #Item 1 -->

                                        <!-- Item 2 -->
                                        <div class="item">
                                            <img src="image/properties/2.jpg" class="properties" alt="properties" />

                                        </div>
                                        <!-- #Item 2 -->

                                        <!-- Item 3 -->
                                        <div class="item">
                                            <img src="image/properties/1.jpg" class="properties" alt="properties" />
                                        </div>
                                        <!-- #Item 3 -->

                                        <!-- Item 4 -->
                                        <div class="item ">
                                            <img src="image/properties/3.jpg" class="properties" alt="properties" />

                                        </div>
                                        <!-- # Item 4 -->
                                    </div>
                                    <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
                                    <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
                                </div>
                                <!-- #Slider Ends -->

                            </div>




                            <div class="spacer">
                                <h4><span class="glyphicon glyphicon-th-list"></span> Properties Detail</h4>
                                <p>Efficiently unleash cross-media information without cross-media value. Quickly maximize timely deliverables for real-time schemas. Dramatically maintain clicks-and-mortar solutions without functional solutions.</p>
                                <p>Completely synergize resource sucking relationships via premier niche markets. Professionally cultivate one-to-one customer service with robust ideas. Dynamically innovate resource-leveling customer service for state of the art customer service</p>

                            </div>

                        </div>
                        <div class="col-lg-4">
                            <div class="col-lg-12  col-sm-6">
                                <div class="property-info">
                                    <p><strong>Ref No. 1234567</strong></p>
                                    <p class="price">$ 200,000,000</p>
                                    <p class="area">
                                        <span class="glyphicon glyphicon-map-marker"></span>
                                        344 Villa, Syndey, Australia
                                    </p>

                                    <div class="profile">
                                        <span class="glyphicon glyphicon-user"></span> Agent Details
                                        <p>John Parker<br>009 229 2929</p>
                                    </div>
                                </div>

                                <h6><span class="glyphicon glyphicon-home"></span> Availabilty</h6>
                                <div class="listing-detail">
                                    <span data-toggle="tooltip" data-placement="bottom" data-original-title="Bed Room">5</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Living Room">2</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Parking">2</span> <span data-toggle="tooltip" data-placement="bottom" data-original-title="Kitchen">1</span> </div>

                            </div>
                            <div class="col-lg-12 col-sm-6 ">
                                <div class="enquiry">
                                    <h6><span class="glyphicon glyphicon-envelope"></span> Post Enquiry</h6>
                                    <form role="form">
                                        <input type="text" class="form-control" placeholder="Full Name"/>
                                        <input type="text" class="form-control" placeholder="you@yourdomain.com"/>
                                        <input type="text" class="form-control" placeholder="your number"/>
                                        <textarea rows="6" class="form-control" placeholder="Whats on your mind?"></textarea>
                                        <button type="submit" class="btn btn-primary" name="Submit">Send Message</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop