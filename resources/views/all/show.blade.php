@extends('layouts.master')

@section('content')
    @foreach($property->all() as $value)a
        <!-- Swiper -->
        <div class="main">
            <div class="picture">
                <div class="swiper-container gallery-top">
                    <div class="swiper-wrapper">
                        @foreach($value->propertyPhotos as $set)
                            <div class="swiper-slide"
                                 style="background-image:url('{{$set->path}}')"></div>
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
                                 style="background-image:url('{{$set->path}}')"></div>
                        @endforeach
                    </div>
                </div>
            </div>
            @endforeach
        </div>
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




