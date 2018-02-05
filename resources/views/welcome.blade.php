@extends('layouts.master')
@section('content')
    @include('layouts.banner')
      @include('layouts.modal')
        <div class="#">
                <div id="slider" class="sl-slider-wrapper">
                        <div class="sl-slider">
                            <div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="-25" ata-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">
                                <div class="sl-slide-inner">
                                    <div class="bg-img bg-img-1"></div>
                                    <h2><a href="/property">4 Bed House All Ensuite for Rent</a></h2>
                                    <blockquote>
                                        <p class="location">
                                            <span class="glyphicon glyphicon-map-marker">
                                            </span> Old Kitisuru, Nairobi </p>
                                        <cite>Ksh. 400,000</cite>
                                    </blockquote>
                                </div>
                            </div>
                            <div class="sl-slide" data-orientation="vertical" data-slice1-rotation="10" data-slice2-rotation="-15"
                                 data-slice1-scale="1.5" data-slice2-scale="1.5">
                                <div class="sl-slide-inner">
                                    <div class="bg-img bg-img-2"></div>
                                    <h2><a href="/property">Beautiful 5 BedRooms House for Rent</a></h2>
                                    <blockquote>
                                        <p class="location"><span class="glyphicon glyphicon-map-marker">
                                            </span> Rosslyn Heights Nyari,
                                            Nairobi</p>
                                        <cite>$ 3,500</cite>
                                    </blockquote>
                                </div>
                            </div>
                            <div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="3" data-slice2-rotation="3"
                                 data-slice1-scale="2" data-slice2-scale="1">
                                <div class="sl-slide-inner">
                                    <div class="bg-img bg-img-3"></div>
                                    <h2><a href="/property">6 BedRooms All Ensuite House for Rent</a></h2>
                                    <blockquote>
                                        <p class="location"><span class="glyphicon glyphicon-map-marker"></span> Peponi Road Westlands,
                                            Nairobi</p>
                                        <cite>Ksh. 400,000</cite>
                                    </blockquote>
                                </div>
                            </div>

                            <div class="sl-slide" data-orientation="vertical" data-slice1-rotation="-5" data-slice2-rotation="25"
                                 data-slice1-scale="2" data-slice2-scale="1">
                                <div class="sl-slide-inner">
                                    <div class="bg-img bg-img-4"></div>
                                    <h2><a href="/property">Gitanga Duplex 4 Bedroom Apartments on Sale</a></h2>
                                    <blockquote>
                                        <p class="location"><span class="glyphicon glyphicon-map-marker">
                                            </span> Lavington Gitange Road,
                                            Nairobi</p>
                                        <cite>Ksh. 30,000,000</cite>
                                    </blockquote>
                                </div>
                            </div>
                            <div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="-5" data-slice2-rotation="10"
                                 data-slice1-scale="2" data-slice2-scale="1">
                                <div class="sl-slide-inner">
                                    <div class="bg-img bg-img-5"></div>
                                    <h2><a href="/property">4 BedRooms All Ensuite Home on Sale</a></h2>
                                    <blockquote>
                                        <p class="location"><span class="glyphicon glyphicon-map-marker"></span> Kessel Homes,
                                            Kitisuru</p>
                                        <cite>Ksh. 25,000,000</cite>
                                    </blockquote>
                                </div>
                            </div>
                        </div><!-- /sl-slider -->
                        <nav id="nav-dots" class="nav-dots">
                            <span class="nav-dot-current"></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                        </nav>

                    </div><!-- /slider-wrapper -->

        <div class="banner-search" style="background-color: #0D2338">
            <div class="container">
                <!-- banner -->
                <h3>Buy, Sale & Rent</h3>
                <div class="searchbar">
                    <div class="row">
                        <div class="col-lg-6 col-sm-6">
                            <input type="text" class="form-control" placeholder="Search of Properties">
                            <div class="row">
                                <div class="col-lg-3 col-sm-3 ">
                                    <select class="form-control">
                                        <option>Buy</option>
                                        <option>Rent</option>
                                        <option>Sale</option>
                                    </select>
                                </div>
                                <div class="col-lg-3 col-sm-4">
                                    <select class="form-control">
                                        <option>Price</option>
                                        <option>$150,000 - $200,000</option>
                                        <option>$200,000 - $250,000</option>
                                        <option>$250,000 - $300,000</option>
                                        <option>$300,000 - above</option>
                                    </select>
                                </div>
                                <div class="col-lg-3 col-sm-4">
                                    <select class="form-control">
                                        <option>Property</option>
                                        <option>Apartment</option>
                                        <option>Building</option>
                                        <option>Office Space</option>
                                    </select>
                                </div>
                                <div class="col-lg-3 col-sm-4">
                                    <button class="btn btn-success" style="background-color: #2ab27b" onclick="window.location.href='property'">Find
                                        Now
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 col-lg-offset-1 col-sm-6 ">
                            <p>Join now and get updated with all the properties deals.</p>
                            <button class="btn btn-info" data-toggle="modal" data-target="#loginpop">Login</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="properties-listing spacer"><a href="/property" class="pull-right viewall">View All Listing</a>
                <h2> Latest Listing Properties</h2>
                <hr>
                <div class="row">
                    @foreach($properties->slice(0,4) as $property)
                    <div class="col-sm-6 col-md-3">
                      <a href="{{url('/property')}}">  <div class="thumbnail">
                        @foreach($property->propertyPhotos as $set)
                            @if($loop->first)
                            <img src="/{{$set->thumbnail_path}}" alt="...">
                            <div class="caption">
                                <h5 style="color: #ff770e"><strong>{{$property->title}}</strong></h5>
                                <h6><strong>{{$property->location}}</strong></h6>
                                <h5 style="color: #ff770e"><strong>Ksh. {{number_format($property->price)}}</strong></h5>
                            </div>
                                @endif
                            @endforeach
                          </div>
                      </a>
                    </div>
                    @endforeach
                </div>

            </div>
            <div class="spacer">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2 recent-view">
                        <h3>About Us</h3>
                        <p style="text-align: center"> HomeAssured Property primarily core value is sale of quality residential property in Kenya,
                            Properties
                            offers its expertise
                            and client base in Kenya. Our team is committed to maintaining these high levels of
                            professional
                            service
                            with unquestionable
                            integrity and reliability whilst continually assessing the changing needs of the market
                            place
                            <br><a href="/about">Learn More</a></p>

                    </div>
                </div>
            </div>
        </div>
    </div>
    @section('scripts.footer')
        <script type="text/javascript" src="{{asset('Front/slitslider/js/modernizr.custom.79639.js')}}"></script>
        <script type="text/javascript" src="{{asset('Front/slitslider/js/jquery.ba-cond.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('Front/slitslider/js/jquery.slitslider.js')}}"></script>
        @stop
@stop




