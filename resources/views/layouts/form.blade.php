{{csrf_field()}}
<div class="row">
    <div class="form col-md-6">
        <div class="form-group">
            <label for="title">Title of the Property</label>
            <input type="text" class="form-control" name="title" id="title"
                   value="{{ old('title', $property->title) }}">
        </div>
        <div class="form-group">
            <label for="location">Location of the property:</label>
            <input type="text" class="form-control" name="location" id="location"
                   value="{{ old('location', $property->location) }}" required>
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
                           placeholder="400,000" value="{{old('price', $property->price)}}" required>
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
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="description">Describe the Property:</label>
            <textarea type="text" class="form-control" name="description" id="description" rows="4"
                      required
                      placeholder="Number of bedrooms, Number of bedrooms, Number of Garages,Floor size etc...">{{old('description', $property->description)}}</textarea>
        </div>
        <div class="row">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="col-md-12">
                        <label for="head" style="padding-left:13em">Select One Category Only:</label>
                        <div class="form-group">
                            <label for="commercial">If it's Commercial Category:</label>
                            <select name="commercial" class="form-control" id="commercial">
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
                            <select name="land" class="form-control" id="commercial">
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
                            <select name="residential" class="form-control" id="residential">
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
    </div>
</div>
<hr>
<div>
</div>
@include('layouts.errors')
@section('scripts.footer')
    <script type="text/javascript" src="{{asset('js/masknumber.min.js')}}"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('[id=integer-default]').maskNumber({integer: true});
        });
    </script>
@stop


