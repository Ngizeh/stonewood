<div class="properties-listing spacer">
        <div class="row">
            <div class="col-lg-3 col-sm-4">
                @include('partials.search')
                @if(Auth::check())
                <a href="{{'/property/create'}}" class="btn btn-primary">Create A Property</a>
                @endif
            </div>
            <div class="col-md-9 col-md-8">
                <div class="row">
                @foreach($properties as $property)
                    <div class="col-md-4 col-sm-6">
                            <div class="properties">
                                @foreach($property->propertyPhotos as $set)
                                <div class="image-holder">
                                        @if($loop->first)
                                        <img src="/{{$set->thumbnail_path}}" class="img-responsive" alt="properties">
                                            @endif
                                    </div>
                                @endforeach
                                <h4><a href="{{url('/property/'.$property->title_heading())}}"
                                style="color: #ff770e"><strong>{{str_limit($property->title, 18)}}</strong></a></h4>
                                <p class="price">@include('partials.currency') {{$property->price_format()}}</p>
                                <a class="btn btn-primary" href="{{url('/property/'.$property->title_heading())}}">View Details</a>
                            </div>
                        <hr>
                    </div>
                    @endforeach
                </div>
                </div>
                <div class="center">
                    {{ $properties->links() }}
                </div>
 </div>
 </div>


