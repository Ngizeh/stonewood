 <div class="properties-listing">
        <div class="row">
            <div class="col-md-3">
                @include('partials.search')
                @if(Auth::check())
                <a href="{{'/property/create'}}" class="btn btn-primary">Create A Property</a>
                @endif
            </div>
            <div class="col-md-9">
                <hr>
                <div class="row">
                    @foreach($properties as $property)
                        <div class="col-md-4 col">
                            @foreach($property as $item)
                            <div class="properties">
                                @foreach($property->propertyPhotos as $set)
                                        @if($loop->first)
                                        <div class="image-holder">
                                        <img src="/{{$set->thumbnail_path}}" class="img-responsive"
                                    alt="properties">
                                     </div>
                                        @endif
                                    @endforeach
                                <p>{{$property->title}}</p>
                            </div>
                            @endforeach
                        </div>
                        @endforeach
                </div>
                <div class="center">
                    {{ $properties->links() }}
                </div>
            </div>
        </div>
    </div>



















 {{--{    @foreach($properties as $property)--}}
         {{--<div class="col-md-4 col-sm-6">--}}
             {{--@foreach($property as $item)--}}
                 {{--<div class="properties">--}}
                     {{--@foreach($property->propertyPhotos as $set)--}}
                         {{--@if($loop->first)--}}
                             {{--<div class="image-holder">--}}
                                 {{--<img src="/{{$set->thumbnail_path}}" class="img-responsive"--}}
                                      {{--alt="properties">--}}
                             {{--</div>--}}
                         {{--@endif--}}
                     {{--@endforeach--}}
                     {{--<h4><a href="{{url('/property/'.$property->title_heading())}}"--}}
                            {{--style="color: #ff770e"><strong>{{$property->title}}</strong></a></h4>--}}
                     {{--<p class="price">@include('partials.currency') {{$property->price_format()}}</p>--}}
                     {{--<a class="btn btn-primary" href="{{url('/property/'.$property->title_heading())}}">View--}}
                         {{--Details</a>--}}
                 {{--</div>--}}
             {{--@endforeach--}}
         {{--</div>--}}
 {{--</div>--}}
 {{--@endforeach}--}}
