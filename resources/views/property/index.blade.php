@extends('layouts.master')

@section('content')
    <div class="container login">
        <div class="row">
            <div class="col-md-6">
                <h1>All Properties</h1>
            </div>
            <div class="col-md-6">
                @if(Auth::check())
                <a href="{{'/property/create'}}" style="margin-top: 2em" class="btn btn-primary pull-right">Create A Property</a>
                    @endif
            </div>
        </div>

        @foreach($property->all() as $value)

            <div class="row index">
                <div class="col-md-4">
                    @foreach($value->propertyPhotos as $set)
                        @if($loop->first)
                            <img src="/{{$set->thumbnail_path }}" alt="{{$set->name}}">
                        @endif
                    @endforeach
                </div>
                <div class="col-md-8">
                    <h2>{{$value->title}}</h2>
                    <p class="big"><strong> Ksh. {{number_format($value->price)}}</strong></p>
                    <p>{{str_limit($value->description, 300, ' ...')}} <a href="/{{$value->title}}"> &lsqb; Read More
                            &rsqb;</a></p>
                </div>
            </div>
            <hr>
        @endforeach
        {{$property->links()}}
    </div>
@stop





{{--@foreach($property->details() as $value)--}}
{{--<div class="container-fluid login">--}}
{{--<h1 style="color:  #ff770e">{{$value->title}}  at {{$value->location}}</h1>--}}
{{--<hr>--}}
{{--<!-- Swiper -->--}}
{{--<div class="main">--}}
{{--<div class="picture">--}}
{{--<div class="swiper-container gallery-top">--}}
{{--<div class="swiper-wrapper">--}}
{{--@foreach($value->propertyPhotos as $set)--}}
{{--<div class="swiper-slide"--}}
{{--style="background-image:url('{{$set->path}}')"></div>--}}
{{--@endforeach--}}
{{--</div>--}}
{{--<!-- Add Arrows -->--}}
{{--<div class="swiper-button-next swiper-button-white"></div>--}}
{{--<div class="swiper-button-prev swiper-button-white"></div>--}}
{{--</div>--}}
{{--<div class="swiper-container gallery-thumbs">--}}
{{--<div class="swiper-wrapper">--}}
{{--@foreach($value->propertyPhotos as $set)--}}
{{--<div class="swiper-slide"--}}
{{--style="background-image:url('{{$set->path}}')"></div>--}}
{{--@endforeach--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--<div class="container details">--}}
{{--<div class="row">--}}
{{--<div class="col-md-9 col-lg-offset-1">--}}
{{--<p>--}}
{{--{!! nl2br($value->description)!!}--}}
{{--</p>--}}
{{--<p>--}}
{{--<strong>Contact Allan on +{{$value->phone_number}}</strong>--}}
{{--</p>--}}
{{--<p>--}}
{{--<strong>Letting Price {{$value->price}} + S.C. 60000</strong>--}}
{{--</p>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}


{{--@endforeach--}}
{{--@stop--}}
{{--@section('scripts.footer')--}}
{{--<script type="text/javascript" src="{{asset('js/swiper.min.js')}}"></script>--}}
{{--<script type="text/javascript">--}}
{{--var galleryTop = new Swiper('.gallery-top', {--}}
{{--spaceBetween: 10,--}}
{{--navigation: {--}}
{{--nextEl: '.swiper-button-next',--}}
{{--prevEl: '.swiper-button-prev',--}}
{{--},--}}
{{--autoplay: {--}}
{{--delay: 2500,--}}
{{--disableOnInteraction: false,--}}
{{--},--}}
{{--});--}}
{{--var galleryThumbs = new Swiper('.gallery-thumbs', {--}}
{{--spaceBetween: 10,--}}
{{--centeredSlides: true,--}}
{{--slidesPerView: 'auto',--}}
{{--touchRatio: 0.2,--}}
{{--slideToClickedSlide: true,--}}
{{--});--}}
{{--galleryTop.controller.control = galleryThumbs;--}}
{{--galleryThumbs.controller.control = galleryTop;--}}

{{--</script>--}}

