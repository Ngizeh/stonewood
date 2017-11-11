{{csrf_field()}}
<div class="row">
    <div class="form col-md-6">
        <div class="form-group">
            <label for="title">Title of the Property</label>
            <input type="text" class="form-control" name="title" id="title" value="{{ old('title', $property->title) }}">
        </div>
        <div class="form-group">
            <label for="location">Location of the property:</label>
            <input type="text" class="form-control" name="location" id="location"
                   value="{{ old('location', $property->location) }}" required>
        </div>
        <div class="form-group">
            <label for="price">Price of the Property:</label>
            <input type="number" class="form-control" name="price" id="price" value="{{ old('price', $property->price) }}"
                   placeholder="400,000"
                   required>
        </div>
        <div class="form-group">
            <label for="phone_number">Agent Contacts:</label>
            <input type="number" class="form-control" name="phone_number" id="phone_number"
                   placeholder="254712456789"
                   value="{{ old('phone_number', $property->phone_number) }}"
                   required>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="description">Describe the Property:</label>
            <textarea type="text" class="form-control" name="description" id="description" rows="4"
                      required >{{old('description', $property->description)}}</textarea>
        </div>
        <div class="form-group">
            <label for="categories">Select Categories</label>
            <select name="category" class="form-control" id="select" required value="{{ old('category', $property->category)}}">
                <option selected disabled>Choose a Category</option>
                <option>Apartments</option>
                <option>Condos</option>
                <option>Duplexes</option>
                <option>Houses</option>
                <option>Land</option>
                <option>Offices</option>
                <option>Rentals</option>
                <option>Villas</option>
            </select>
        </div>
        <div class="form-group">
            <label for="listing">Listed In</label>
            <select name="listing" class="form-control" id="select" required value="{{ old('listing', $property->listing)}}">
                <option selected disabled>Choose a Listing</option>
                <option>Foreclosure</option>
                <option>Developments</option>
                <option>Rentals</option>
                <option>Repossessed</option>
                <option>Sales</option>
            </select>
        </div>
    </div>
</div>
<hr>
<div>
</div>
@if(count($errors) > 0 )
    <div class="alert alert-danger">
        <ul>
            @foreach($errors as $error)
                <li>
                    {{$error}}
                </li>
            @endforeach
        </ul>
    </div>
@endif