<?php

namespace App\Http\Controllers;

use App\Property;
use App\PropertyPhoto;
use Illuminate\Http\Request;


class WelcomeController extends Controller
{
    public function index(Property $property)
    {
        $properties = $property->with('propertyPhotos')->get();

        return view('welcome', compact('properties'));
    }
}
