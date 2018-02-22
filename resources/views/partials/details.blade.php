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
                    <div class="col-md-4 col-sm-6">
                            <div class="properties">
                                <div class="image-holder">
                                    @foreach($property->propertyPhotos as $set)
                                        @if($loop->first)
                                        <img src="/{{$set->thumbnail_path}}" class="img-responsive"
                                    alt="properties">
                                            @endif
                                        @endforeach
                                    </div>
                                <h4><a href="{{url('/property/'.$property->title_heading())}}"
                                style="color: #ff770e"><strong>{{$property->title}}</strong></a></h4>
                                <p class="price">@include('partials.currency') {{$property->price_format()}}</p>
                                <a class="btn btn-primary" href="{{url('/property/'.$property->title_heading())}}">View Details</a>
                            </div>
                    </div>
                    @endforeach
                </div>
                <div class="center">
                    {{ $properties->links() }}
                </div>
            </div>
        </div>
 </div>


