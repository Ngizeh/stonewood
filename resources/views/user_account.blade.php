@extends('layouts.master')
@section('content')
    <div class="inside-banner">
          <div class="container">
              <span class="pull-right"> <a href="{{ route('logout') }}"
                                             onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Logout
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                  </a>
              </span>
              <h2>My Properties - {{Auth::user()->name}}</h2>
          </div>
  </div>
<div class="container login">
    <h3 class="lead center"><u>My Account Settings</u></h3>
    <div class="row">
        <p class="lead"> My Profile</p>
        <div class="col-lg-3 col-sm-4">
            <div class="row">
                <div class="col-md-6">
            <a href="{{'/property/create'}}" class="btn btn-primary btn-xs">Create A Property</a>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <table class="table table-condensed">
                <thead>
                <tr>
                    <th>Ref No.</th>
                    <th>Property Title </th>
                    <th>Location</th>
                    <th>List for </th>
                    <th>Price</th>
                    <th>Created On </th>
                    <th>Action </th>
                    <th>Update </th>
                </tr>
                </thead>
                <tbody>
                @foreach($properties as $property)
                <tr>
                    <td>{{strtoupper($property->reference_number)}}</td>
                    <td><a href="{{url('/property/'.$property->title_heading())}}">{{$property->title}}</a></td>
                    <td>{{str_limit($property->location, 25)}}</td>
                    <td>{{$property->listed}}</td>
                    <td>{{$property->price}}</td>
                    <td>{{$property->created_at}}</td>

                    <td>    <form method="post" action="/property/{{$property->id}}">
                            {{csrf_field()}}
                            <input type="hidden" name="_method" value="delete">
                                <button type="submit" class="btn btn-danger btn-xs">Delete</button>
                        </form>
                    </td>
                    <td>
                        <a href="/property/{{$property->id}}/edit" class="btn btn-primary btn-xs">Edit</a>
                    </td>

                </tr>
                @endforeach
            </table>
        </div>
    </div>
                <div class="center">
                    {{ $properties->links() }}
                </div>
        </div>

@stop