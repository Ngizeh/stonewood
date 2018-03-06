{{csrf_field()}}
<div class="row">
    <div class="form col-md-6">
        <div class="form-group">
            <label for="title">Title of the Property</label>
            <input type="text" class="form-control" name="title" id="title"
                   value="{{ old('title', $property->title) }}">
        </div>
        <div class="form-group">
            <label for="listed">Property Listed For:</label>
            <select name="listed" class="form-control" id="listing">
                <option selected disabled>Choose a Listing</option>
                @foreach($listed as $list)
                    <option value="{{$list->listed_for}}"
                            {{old('listed', $property->listed) == $list->listed_for ? 'selected' : ''}}>
                        {{$list->listed_for}}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="row">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="col-md-12">
                        <label for="head" style="padding-left:13em">Select One Category Only:</label>
                        <div class="form-group">
                            <label for="commercial">If it's Commercial Category:</label>
                            <select name="commercial" class="form-control">
                                <option selected disabled>Choose a Commercial Category</option>
                                @foreach($commercialCategory as $commercial)
                                    <option value="{{$commercial->category}}"
                                            {{old('commercial', $property->commercial) == $commercial->category ? 'selected' : ''}}>
                                        {{$commercial->category}}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="land">If it's Land Listed </label>
                            <select name="land" class="form-control">
                                <option selected disabled>Choose a Category</option>
                                @foreach($landCategory as $land)
                                    <option value="{{$land->category}}"
                                            {{old('land', $property->land) == $land->category ? 'selected' : ''}}>
                                        {{$land->category}}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="residential">If it's Residential Listed </label>
                            <select name="residential" class="form-control">
                                <option selected disabled>Choose a Category</option>
                                @foreach($residentialCategory as $residential)
                                    <option value="{{$residential->category}}"
                                            {{old('residential', $property->residential) == $residential->category ? 'selected' : ''}}>
                                        {{$residential->category}}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="description">Describe the Property:</label>
            <textarea type="text" class="form-control" name="description" id="description" rows="4"
                      required
                      placeholder="Give a detailed Description of the Property and it's Environs...">{{old('description', $property->description)}}</textarea>
        </div>
        <div class="form-group">
            <label for="price">Price of the Property:</label>
            <div class="row">
                <div class="col-md-4">
                    <select name="price_currency" class="form-control">
                        <option selected disabled>Select Currency</option>
                        @foreach($currency as $money)
                            <option value="{{$money->currency}}"
                                    {{old('price_currency', $property->price_currency) == $money->currency ? 'selected' : ''}}>
                                {{$money->currency}}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-8">
                    <input class="form-control divide" name="price" id="integer-default"
                           placeholder="400,000" value="{{old('price', $property->price)}}">
                </div>
            </div>
            </div>
        <div class="form-group">
            <label for="service_charge">Service Charge Property (Optional):</label>
            <div class="row">
                <div class="col-md-4">
                    <select name="service_currency" class="form-control">
                        <option selected disabled>Select Currency</option>
                        @foreach($currency as $money)
                            <option value="{{$money->currency}}"
                                    {{old('service_currency', $property->service_currency) == $money->currency ? 'selected' : ''}}>
                                {{$money->currency}}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-8">
                    <input class="form-control divide" name="service_charge" id="integer-default"
                           placeholder="400,000" value="{{old('service_charge', $property->service_charge)}}">
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="row">
            <div class="panel panel-default">
                <div class="panel-body">
                    <label for="head" style="padding-left:8em">Select the Options If the Property is
                        Residential:</label>
                    <div class="form-group">
                        <div class="col-md-3">
                            <label for=bedroom>Bed Room</label>
                            <select name="bedroom"  class="form-control">
                                <option selected disabled>Choose</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label for="sitting_room">Sitting Room</label>
                            <select name="sitting_room" id="disabled_input" class="form-control">
                                <option selected disabled>Choose</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label for="bathroom">Bath Room </label>
                            <select name="bathroom" id="disabled_input" class="form-control">
                                <option selected disabled>Choose</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                                <option value="13">13</option>
                                <option value="14">14</option>
                                <option value="15">15</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label for="garage">Garage </label>
                            <select name="garage" id="disabled_input" class="form-control">
                                <option selected disabled>Choose</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="">Floor Size in ft<sup>2</sup></label>
            <input type="text" class="form-control" name="floor_size" value="{{old('floor_size', $property->floor_size)}}"
                   id="integer-default">
        </div>
        <div class="form-group">
            <label for="">Land Size</label>
            <div class="input-group">
                <input class="form-control" name="property_size" type="text" id="integer-default">
                <div class="input-group-btn">
                    <select class="form-control" name="property_metrics">
                        <option value="hectares">ha</option>
                        <option value="acre">acre</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="map">Location</label>
            <input type="text" id="searchmap" class="form-control" value="{{old('location', $property->location)}}"
                   name="location">
            <div id="map-canvas" style="height: 400px; width: 100%" class="form-control"></div>
        </div>
        <div class="form-group">
            <label for="latitude">Latitude</label>
            <input readonly="readonly" type="text" class="form-control input-sm"
                   value="{{old('lat', $property->lat)}}"
                   name="lat" id="lat">
        </div>
        <div class="form-group">
            <label for="longitude">Longitude</label>
            <input readonly="readonly" type="text" class="form-control input-sm"
                   value="{{old('lng', $property->lng)}}"
                   name="lng" id="lng">
        </div>
    </div>
</div>
<hr>
<div>
</div>
@include('layouts.errors')
@section('scripts.footer')
    <script src="{{asset('js/masknumber.min.js')}}"></script>
    <script>
        $(document).ready(function () {
            $('[id=integer-default]').maskNumber({integer: true});
        });
    </script>
    <script>
        var Nairobi = {lat: -1.2920659, lng: 36.82194619999996};
        var map = new google.maps.Map(document.getElementById('map-canvas'), {
            zoom: 15,
            center: Nairobi
        });
        var marker = new google.maps.Marker({
            position: Nairobi,
            map: map,
            draggable: true
        });
        var searchBox = new google.maps.places.Autocomplete(document.getElementById('searchmap'));
        google.maps.event.addListener(searchBox,'places_changed',function(){
            var places = searchBox.getPlaces();
            var bounds = new google.maps.LatLngBounds();
            var i, place;
            for (i=0; place=places[i];i++) {
                bounds.extend(place.geometry.location);
                marker.setPosition(place.geometry.location);
            }
            map.fitBounds(bounds);
            map.setZoom(15);
        });
        google.maps.event.addListener(marker, 'position_changed', function () {
            var lat = marker.getPosition().lat();
            var lng = marker.getPosition().lng();
            $('#lat').val(lat);
            $('#lng').val(lng);
        });
    </script>
@stop


