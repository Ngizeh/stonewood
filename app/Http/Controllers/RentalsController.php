<?php

namespace App\Http\Controllers;

use App\Listed;
use App\Property;
use Illuminate\Http\Request;

class RentalsController extends Controller
{
    public function index(Property $property)
    {
        $properties = Property::where('listed', '=', 'Rental')
            ->with('propertyPhotos')->latest()->paginate(15);

         return view('rent', compact('properties'));
    }
}
