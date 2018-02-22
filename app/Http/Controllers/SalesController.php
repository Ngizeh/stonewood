<?php

namespace App\Http\Controllers;

use App\Property;
use Illuminate\Http\Request;

class SalesController extends Controller

{
    public function index(Property $property)
    {
        $properties = Property::where('listed', '=', 'Sale')
            ->with('propertyPhotos')->paginate(9);

        return view('sale', compact('properties'));
    }
}
