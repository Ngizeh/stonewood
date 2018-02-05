<div class="container">
    <div class="properties-listing">

        <div class="row">
            <div class="col-lg-3 col-sm-4 ">

                <div class="search-form"><h4><span class="glyphicon glyphicon-search"></span> Search for</h4>
                    
                  <form method="get">
                    <input type="text" name="q" class="form-control" placeholder="Search of Property Location">
                    <div class="row">
                        <div class="col-lg-5">
                            <select class="form-control" name="q">
                                <option selected disabled>For</option>
                                <option>Rental</option>
                                <option>Sale</option>
                            </select>
                        </div>
                        <div class="col-lg-7">
                            <select class="form-control" name="q">
                                <option selected disabled>Price</option>
                                <option>$150,000 - $200,000</option>
                                <option>$200,000 - $250,000</option>
                                <option>$250,000 - $300,000</option>

                                <option>$300,000 - above</option>
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <select class="form-control" name="q">
                                <option selected disabled>Property Type</option>
                                <option>Apartment</option>
                                <option>Building</option>
                                <option>Office Space</option>
                            </select>
                        </div>
                    </div>
                    <button class="btn btn-primary" type="submit">Find Now</button>
                    </form>
                </div>
                @if(Auth::check())
                <a href="{{'/property/create'}}" class="btn btn-primary">Create A Property</a>
                @endif
            </div>

            <div class="col-lg-9 col-sm-8">
                <div class="sortby clearfix">
                    <div class="pull-left result">Showing: 12 of 100 </div>
                    <div class="pull-right">
                        <select class="form-control">
                            <option>Sort by</option>
                            <option>Price: Low to High</option>
                            <option>Price: High to Low</option>
                        </select></div>

                </div>
                <div class="row">
                @foreach($properties as $property)
                    <!-- properties -->
                        <div class="col-lg-4 col-sm-6">
                            <div class="properties">
                                @foreach($property->propertyPhotos as $set)
                                    @if($loop->first)
                                        <div class="image-holder"><img src="/{{$set->thumbnail_path}}" class="img-responsive" alt="properties">
                                        </div>
                                    @endif
                                @endforeach
                                <h4><a href="{{url('/property/'.$property->title)}}" style="color: #ff770e"><strong>{{$property->title}}</strong></a></h4>
                                <p class="price">@include('partials.currency') {{number_format($property->price)}}</p>
                                {{--<div class="listing-detail">--}}
                                    {{--<span><i class="fas fa-bed">5</i></span>--}}
                                    {{--<span data-toggle="tooltip" data-placement="bottom" data-original-title="Living Room">2</span>--}}
                                    {{--<span data-toggle="tooltip" data-placement="bottom" data-original-title="Parking">2</span>--}}
                                    {{--<span data-toggle="tooltip" data-placement="bottom" data-original-title="Kitchen">1</span>--}}
                                {{--</div>--}}
                                <a class="btn btn-primary" href="{{url('/property/'.$property->title)}}">View Details</a>
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
</div>
