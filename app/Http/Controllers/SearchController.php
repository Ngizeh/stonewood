<?php

namespace App\Http\Controllers;

use App\Property;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index(Property $property, Request $request)
    {

       $query = $request->input('q', 'f', 'l','p');

       $properties = $query ? Property::search($query)->paginate(9)
                   : Property::all()->paginate(9);

       return view('search', compact('properties'));
    }

}
