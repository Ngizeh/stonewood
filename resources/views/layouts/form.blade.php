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
            <input type="text" class="form-control" name="price" id="price" value="{{ old('price', $property->price) }}"
                   placeholder="400,000"
                   required>
        </div>
        <div class="form-group">
            <label for="service_charge">Service Charge Property:</label>
            <input type="text" class="form-control" name="service_charge" id="service_charge"
                   placeholder="400,000">
        </div>
        <div class="form-group">
            <label for="listed">Property Listed For:</label>
            <select name="listed" class="form-control" id="select"
                    value="{{ old('listed', $property->listed)}}">
                <option selected disabled>Choose a Listing</option>
                @foreach(App\Http\Utilities\Listed::all() as $key => $listed)
                    <option>{{$listed}}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="description">Describe the Property:</label>
            <textarea type="text" class="form-control" name="description" id="description" rows="4"
                      required placeholder="Number of bedrooms, Number of bedrooms, Number of Garages,Floor size etc...">{{old('description', $property->description)}}</textarea>
        </div>
        <div class="form-group">
            <label for="commercial">If it's Commercial Category:</label>
            <select name="commercial" class="form-control" id="select"
                    value="">
                <option selected disabled>Choose a Commercial Category</option>
                @foreach(App\Http\Utilities\Commercial::all() as $key => $commercial)
                    <option>{{$commercial}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="land">If it's Land Listed </label>
            <select name="land" class="form-control" id="select"
                    value="{{ old('land', $property->land)}}">
                <option selected disabled>Choose a Category</option>
                @foreach(App\Http\Utilities\Land::all() as $key => $land)
                    <option>{{$land}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="land">If it's Residential Listed </label>
            <select name="land" class="form-control" id="select"
                    value="{{ old('land', $property->land)}}">
                <option selected disabled>Choose a Category</option>
                @foreach(App\Http\Utilities\Residential::all() as $key => $land)
                    <option>{{$land}}</option>
                @endforeach
            </select>
        </div>

    </div>
</div>
<hr>
<div>
</div>
@include('layouts.errors')

