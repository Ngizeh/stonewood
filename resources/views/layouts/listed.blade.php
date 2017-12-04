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