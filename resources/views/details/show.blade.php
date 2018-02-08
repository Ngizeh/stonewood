@extends('layouts.master')

@section('content')

    @include('layouts.banner')

       @foreach($properties->all() as $property)
        <div class="container-fluid login">
            <h2>{{$property->title}}  located at {{$property->location}}</h2>
            <p>
                <strong> <u>RefNo. {{$property->reference_number}} </u></strong>
            </p>
            <hr>
            <!-- Swiper -->
            <div class="main">
                <div class="picture">
                    <div class="swiper-container gallery-top">
                        <div class="swiper-wrapper">
                            @foreach($property->propertyPhotos as $set)
                                <div class="swiper-slide"
                                     style="background-image:url('/{{$set->path}}')"></div>
                            @endforeach
                        </div>
                        <!-- Add Arrows -->
                        <div class="swiper-button-next swiper-button-white"></div>
                        <div class="swiper-button-prev swiper-button-white"></div>
                    </div>
                    <div class="swiper-container gallery-thumbs">
                        <div class="swiper-wrapper">
                            @foreach($property->propertyPhotos as $set)
                                <div class="swiper-slide"
                                     style="background-image:url('/{{$set->path}}')">
                                </div>
                                @section('facebook_meta')
                                    <!---facebook metadate -->
                                    <meta property="og:image" content="{{url('/'.$set->path)}}">
                                    <meta property="og:image:width" content="600" />
                                    <meta property="og:image:height" content="400" />
                                    <meta property="og:title" content="{{ $property->title }}">
                                    <meta property="og:url" content="https://homeassured.property">

                                        <!-- Twitter metatags -->
                                    <meta name="twitter:card" content="summary_large_image">
                                    <meta name="twitter:site" content="@homeassured_ltd">
                                    <meta name="twitter:title" content="{{$property->title}}">
                                    <meta name="twitter:description" content="{{$property->description}}">
                                    <meta name="twitter:image" content="{{url('/'.$set->path)}}">
                                @endsection
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div class="container details">
                <div class="row">
                    <div class="col-md-9 col-lg-offset-1">
                        <div class="spacer">
                            <h4 style="color: #ff770e"><span class="glyphicon glyphicon-th-list"></span><strong> Properties Detail</strong></h4>
                            <hr>
                            <p>
                            {!! nl2br($property->description)!!}
                        </p>
                            @if($property->bedroom == true)
                                <p>{{$property->bedroom}}
                                    Bedroom
                                </p>
                            @endif
                            @if($property->sitting_room == true)
                               <p>
                                {{$property->sitting_room}}
                                 The Sitting Room
                                </p>
                            @endif
                            @if($property->bathroom == true)
                                <p>{{$property->bathroom}}
                                    Bathroom
                                </p>
                            @endif
                            @if($property->garage == true)
                                <p>{{$property->garage}}
                                    Garage
                                </p>
                            @endif

                        <p>
                            @if($property->service_charge == true)
                               <strong> The Service Charge
                                   @include('partials.currency')
                                   {{number_format($property->service_charge)}}
                               </strong>
                                @endif
                        </p>
                            <p>
                                <strong>@if($property->listed = 'Sale')
                                        Selling
                                    @else
                                        Letting
                                    @endif
                                    Price is
                                    @include('partials.currency')
                                    {{number_format($property->price)}}
                                </strong>
                            </p>
                            <p>
                                <strong>Contact {{$property->user->name }} on +{{$property->user->phone_number}}</strong>
                            </p>
                    </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
              <a href="{{url('property')}}"><strong style="text-transform: uppercase">  <span class="arrow" style="font-size: 2em; padding-left: 1em;">←&nbsp;</span>Back To All </strong></a>
                    </div>
                    <div class="col-md-6">

                @if(Auth::check())

                        <a href="/property/{{$property->id}}/edit" class="btn btn-success" style="margin-top: 8px">Edit Property</a>
                        @endif
                    </div>
                </div>

            </div>
        </div>
    @endforeach
@stop
@section('scripts.footer')
    <script type="text/javascript" src="{{asset('js/swiper.min.js')}}"></script>
    <script type="text/javascript">
        var galleryTop = new Swiper('.gallery-top', {
            spaceBetween: 10,
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev'
            },
            autoplay: {
                delay: 3500,
                disableOnInteraction: false
            }
        });
        var galleryThumbs = new Swiper('.gallery-thumbs', {
            spaceBetween: 10,
            centeredSlides: true,
            slidesPerView: 'auto',
            touchRatio: 0.2,
            slideToClickedSlide: true,
        });
        galleryTop.controller.control = galleryThumbs;
        galleryThumbs.controller.control = galleryTop;

    </script>
@stop