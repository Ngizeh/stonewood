@extends('layouts.master')

@section('content')

       @foreach($property as $value)
        <div class="container-fluid login">
            <h1 style="color:  #ff770e">{{$value->title}}  at {{$value->location}}</h1>
            <hr>
            <!-- Swiper -->
            <div class="main">
                <div class="picture">
                    <div class="swiper-container gallery-top">
                        <div class="swiper-wrapper">
                            @foreach($value->propertyPhotos as $set)
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
                            @foreach($value->propertyPhotos as $set)
                                <div class="swiper-slide"
                                     style="background-image:url('/{{$set->path}}')"></div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div class="container details">
                <div class="row">
                    <div class="col-md-9 col-lg-offset-1">
                        <p>
                            {!! nl2br($value->description)!!}
                        </p>
                        <p>
                            <strong>Contact {{$value->user->name }} on +{{$value->phone_number}}</strong>
                        </p>
                        <p>
                            <strong>Letting Price Ksh. {{number_format($value->price)}} / $ {{number_format(($value->price)/100)}} </strong>
                        </p>
                    </div>
                </div>
                <div class="row">
              <a href="{{url('property')}}"><strong style="text-transform: uppercase">  <span class="arrow" style="font-size: 2em; padding-left: 1em;">←</span>Back To All </strong></a>

                        <a href="/property/{{$value->id}}/edit" class="btn btn-success pull-right">Edit Property</a>
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