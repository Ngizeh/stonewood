<?php

namespace App\Http\Controllers;

use App\Property;
use Illuminate\Http\Request;

class SalesController extends Controller

{
    public function index(Property $property)
    {
        $property = Property::where('listed', '=', 'Sales')
            ->with('propertyPhotos')->latest()->paginate(15);

        return view('sale', compact('property'));
    }
}
