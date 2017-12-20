@extends('layouts.master')

@section('content')

       @foreach($property->all() as $property)
        <div class="container-fluid login">
            <h1 style="color:  #ff770e">{{$property->title}}  at {{$property->location}}</h1>
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
                                     style="background-image:url('/{{$set->path}}')"></div>
                                @section('facebook_meta')
                                    <meta property="og:image" content="{{url('/'.$set->path)}}">
                                    <meta property="og:image:width" content="300" />
                                    <meta property="og:image:height" content="300" />
                                    <meta property="og:title" content="{{ $property->title }}">

                                    <meta name="twitter:card" content="summary_large_image">
                                    <meta name="twitter:site" content="@homeassured_ltd">
                                    <meta name="twitter:title" content="{{$property->title}}">
                                    <meta name="twitter:description" content="{{$property->description}}">
                                    <meta name="twitter:image" content="{{url('/'.$set->path)}}">
                                    {{--<meta name="twitter:image:width" content="600">--}}
                                    {{--<meta name="twitter:image:height" content="600">--}}
                                @endsection
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div class="container details">
                <div class="row">
                    <div class="col-md-9 col-lg-offset-1">
                        <p>
                            {!! nl2br($property->description)!!}
                        </p>
                        <p>
                            <strong>Contact {{$property->user->name }} on +{{$property->user->phone_number}}</strong>
                        </p>
                        <p>
                            <strong>Letting Price Ksh. {{number_format($property->price)}} / $ {{number_format(($property->price)/100)}} </strong>
                        </p>
                        <p>
                            @if($property->service_charge == true)
                               <strong> The Service Charge is Ksh. {{$property->service_charge}}</strong>
                                @endif
                        </p>
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
                prevEl: '.swiper-button-prev',
            },
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },
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