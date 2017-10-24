<?php

namespace App\Http\Controllers;

use App\Property;
use App\PropertyPhoto;
use Illuminate\Http\Request;

class AllPropertyController extends Controller
{
    public function show(Property $property)
    {
        $property = $property->with('propertyPhotos')->get();

        //dd($property->toArray());

        return view('all.show', compact('property'));
    }
}
