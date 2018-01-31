<?php

namespace App\Http\Controllers;

use App\Property;
use Illuminate\Http\Request;

class BuyRentController extends Controller
{
    public function index(Property $property)
    {
        $properties = $property->with('propertyPhotos')->latest()->paginate(3);

        return view('buysalerent', compact('properties'));
    }
}
