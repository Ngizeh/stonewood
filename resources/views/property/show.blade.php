@extends('layouts.master')
@section('content')
    <div class="inside-banner">
            <div class="container">
                <span class="pull-right"><a href="/property/create">Back</a></span>
                <h2>Upload A Property Photos</h2>
            </div>
        </div>

    <div class="container-fluid login">
        <div class="row">
            <div class="col-md-3">
                <h2><strong>{{$property->title}}</strong></h2>
                <h5><strong>
                        @include('partials.currency')
                        {{$property->price_format()}}
                    </strong></h5>
                <hr>
                <p> {{$property->description}}</p>
                <hr>
                <h5><strong>Call {{$property->user->name}} on {{$property->user->phone_number}}</strong></h5>
                <hr>
                <a href="{{url('/property')}}" class="btn btn-primary">Publish Property</a>
            </div>
            <div class="col-md-9 gallary">
                @foreach($property->propertyPhotos->chunk(2) as $set)
                    <div class="row">
                        @foreach($set as $photo)
                            <div class="col-md-6 gallary__image">
                                <form method="post" action="/property_photo/{{$photo->id}}">
                                    {{csrf_field()}}
                                    <input type="hidden" name="_method" value="delete">
                                    <div class="col-md-4">
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                    </div>
                                    <br>
                                </form>
                                <br>
                                <img src="/{{$photo->thumbnail_path}}" alt="">
                            </div>
                        @endforeach
                    </div>
                @endforeach
                <h2>Add Photos of the Property</h2>
                <hr>
                <form id="addphoto" action="/{{ $property->location}}/{{$property->title}}/photos"
                      class="dropzone" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}

                </form>
                    <hr>
                    <div class="row">
                        <div class="col-md-6">
                            <h3>Add Document of the Property</h3>
                            <hr>
                            <form id="add_doc" action="/{{ $property->location}}/{{$property->title}}/files"
                                  class="dropzone" method="post" enctype="multipart/form-data">
                                {{csrf_field()}}

                            </form>
                        </div>
                        <div class="col-md-6">
                        <h3>Add Video of the Property</h3>
                            <hr>
                        <form id="addvideo" action="/{{ $property->location}}/{{$property->title}}/video"
                              class="dropzone" method="post" enctype="multipart/form-data">
                            {{csrf_field()}}

                        </form>
                        </div>
                    </div>
            </div>
        </div>

        <hr>
    </div>
@stop
@section('scripts.footer')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.2.0/dropzone.js"></script>
    <script>
        Dropzone.options.addphoto = {
            paramName: 'photo',
            maxFilesize: 10.0,
            acceptedFiles: '.jpg,.jpeg,.png, .bmp'
        };

        Dropzone.options.addvideo = {
            paramName: 'file',
            maxFilesize: 100.0,
            acceptedFiles: '.mp4'
        };
        Dropzone.options.add_doc = {
            paramName: 'file',
            maxFilesize: 100,
             acceptedFiles: ".pdf"
        };
    </script>
@stop




































{{--@extends('layouts.master')--}}

{{--@section('content')--}}
    {{----}}

    {{--<div class="container-fluid login">--}}
            {{--<h1 style="color:  #ff770e">{{$property->title}} at {{$property->location}}</h1>--}}
            {{--<hr>--}}
            {{--<!-- Swiper -->--}}
            {{--<div class="main">--}}
                {{--<div class="picture">--}}
                    {{--<div class="swiper-container gallery-top">--}}
                        {{--<div class="swiper-wrapper">--}}
                            {{--@foreach($property->propertyPhotos as $set)--}}
                                {{--<div class="swiper-slide"--}}
                                     {{--style="background-image:url('/{{$set->path}}')"></div>--}}
                            {{--@endforeach--}}
                        {{--</div>--}}
                        {{--<!-- Add Arrows -->--}}
                        {{--<div class="swiper-button-next swiper-button-white"></div>--}}
                        {{--<div class="swiper-button-prev swiper-button-white"></div>--}}
                    {{--</div>--}}
                    {{--<div class="swiper-container gallery-thumbs">--}}
                        {{--<div class="swiper-wrapper">--}}
                            {{--@foreach($property->propertyPhotos as $set)--}}
                                {{--<div class="swiper-slide"--}}
                                     {{--style="background-image:url('/{{$set->path}}')"></div>--}}
                            {{--@endforeach--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="container details">--}}
                {{--<div class="row">--}}
                    {{--<div class="col-md-9 col-lg-offset-1">--}}
                        {{--<p>--}}
                            {{--{!! nl2br($property->description)!!}--}}
                        {{--</p>--}}
                        {{--<p>--}}
                            {{--<strong>Contact Allan on +{{$property->phone_number}}</strong>--}}
                        {{--</p>--}}
                        {{--<p>--}}
                            {{--<strong>Letting Price {{$property->price}} + S.C. 60000</strong>--}}
                        {{--</p>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}

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

{{--@stop--}}







