@extends('layouts.master')

@section('content')
    <div class="container login" xmlns="http://www.w3.org/1999/html">
        <h2>Upload A Property</h2>
        <hr>
        <form method="post" action="/property" class="form-horizontal">
            {{csrf_field()}}
            <div class="row">
                <div class="form col-md-6">
                    <div class="form-group">
                        <label for="title">Title of the Property</label>
                        <input type="text" class="form-control" name="title" id="title" value="{{ old('title') }}">
                    </div>
                    <div class="form-group">
                        <label for="location">Location of the property:</label>
                        <input type="location" class="form-control" name="location" id="location"
                               value="{{ old('title') }}" required>
                    </div>
                    <div class="form-group">
                        <label for="price">Price of the Property:</label>
                        <input type="text" class="form-control" name="price" id="price" value="{{ old('price') }}"
                               required>
                    </div>
                    <div class="form-group">
                        <label for="phone_number">Agent Contacts:</label>
                        <input type="number" class="form-control" name="phone_number" id="phone_number"
                               value="{{ old('phone_number') }}"
                               required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="description">Describe the Property:</label>
                        <textarea type="text" class="form-control" name="description" id="description" rows="4" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="categories">Select Categories</label>
                        <select name="category" class="form-control" id="select" required value="{{ old('category')}}">
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
                        <select name="listing" class="form-control" id="select" required value="{{ old('listing')}}">
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
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Create Property</button>
                    </div>
                </div>
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
        </form>
    </div>
    <p></p>
@endsection
