@extends('layouts.master')
@include('layouts.nav')
@section('content')
    @include('layouts.banner')
      @include('layouts.modal')
        <div class="#">
                <div id="slider" class="sl-slider-wrapper">
                        <div class="sl-slider">
                            <div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="-25" ata-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">
                                <div class="sl-slide-inner">
                                    <div class="bg-img bg-img-1"></div>
                                    <h2><a href="/property">4 Bed House All Ensuite</a></h2>
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
                                    <h2><a href="/property">Beautiful 5 BedRooms House </a></h2>
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
                                    <h2><a href="/property">6 BedRooms All Ensuite House </a></h2>
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
                                    <h2><a href="/property">River Pointe Apartments</a></h2>
                                    <blockquote>
                                        <p class="location"><span class="glyphicon glyphicon-map-marker">
                                            </span> Lavington King'ara Close,
                                            Nairobi</p>
                                        <cite>Ksh. 25,000,000</cite>
                                    </blockquote>
                                </div>
                            </div>
                            <div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="-5" data-slice2-rotation="10"
                                 data-slice1-scale="2" data-slice2-scale="1">
                                <div class="sl-slide-inner">
                                    <div class="bg-img bg-img-5"></div>
                                    <h2><a href="/property">Kessel Homes, All Ensuite </a></h2>
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
                            <form method="get" action="search">
                            <input type="text" class="form-control" placeholder="Search of Properties" name="q" required >
                            <div class="row">
                                <div class="col-lg-3 col-sm-3 ">
                                    <select class="form-control" name="f">
                                        <option selected disabled>For</option>
                                        <option>Rent</option>
                                        <option>Sale</option>
                                    </select>
                                </div>
                                <div class="col-lg-3 col-sm-4">
                                    <select class="form-control" name="p">
                                        <option selected disabled>Price in Ksh.</option>
                                        <option>150,000 </option>
                                        <option>200,000 </option>
                                        <option>250,000 </option>
                                        <option>300,000 </option>
                                        <option>350,000 </option>
                                        <option>400,000 </option>
                                        <option>450,000 </option>
                                    </select>
                                </div>
                                <div class="col-lg-3 col-sm-4">
                                    <select class="form-control" name="p">
                                        <option selected disabled>Property Type</option>
                                        <option>Apartment</option>
                                        <option>Bungalow</option>
                                        <option>Condo</option>
                                        <option>Duplexes</option>
                                        <option>Building</option>
                                        <option>House</option>
                                        <option>Office</option>
                                        <option>Villas</option>
                                    </select>
                                </div>
                                <div class="col-lg-3 col-sm-4">
                                    <button class="btn btn-success" style="background-color: #2ab27b">Find
                                        Now
                                    </button>
                                </div>
                            </div>
                            </form>
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
                      <a href="{{url('/property/'.$property->title_heading())}}">  <div class="thumbnail">
                        @foreach($property->propertyPhotos as $set)
                            @if($loop->first)
                            <img src="/{{$set->thumbnail_path}}" alt="...">
                            <div class="caption">
                                <h5 style="color: #ff770e"><strong>{{$property->title}}</strong></h5>
                                <h6><strong>{{str_limit($property->location, 30)}}</strong></h6>
                                <h5 style="color: #ff770e"><strong>Ksh. {{$property->price_format()}}</strong></h5>
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
@include('layouts.footer')
@stop




