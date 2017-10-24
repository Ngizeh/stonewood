@extends('layouts.master')

@section('content')
    <div class="container-fluid login">
        <div class="row">
            <div class="col-md-3">
                <h1>{{$property->title}}</h1>
                <h2><strong>Ksh. {{number_format($property->price)}}</strong></h2>
                <hr>
                <p> {{$property->description}}</p>
                <hr>
                <h5> <strong>Call {{$property->user->name}} on {{$property->phone_number}}</strong></h5>
                <hr>
                <a href="{{url('/all-properties')}}" class="btn btn-primary">Publish Property</a>
            </div>
            <div class="col-md-9 gallary">
                @foreach($property->propertyPhotos->chunk(3) as $set)
                    <div class="row">
                        @foreach($set as $photo)
                            <div class="col-md-4 gallary__image">
                                <img src="/{{$photo->thumbnail_path}}" alt="">
                            </div>
                        @endforeach
                    </div>
                @endforeach
                    <h2>Add Photos of the Property</h2>

                    <hr>

                    <form id="addphoto" action="/{{ $property->location}}/{{$property->title}}/photos"
                          class="dropzone" method="post">
                        {{csrf_field()}}

                    </form>
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
            maxFilesize: 4,
            acceptedFiles: '.jpg,.jpeg,.png, .bmp'
        };
    </script>
@stop