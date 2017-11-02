<?php

namespace App\Http\Controllers;

use App\Property;
use App\PropertyPhoto;
use App\User;
use Illuminate\Http\Request;

class AllPropertyController extends Controller
{

    public function show($id)
    {
        $property = Property::where('id', '=', $id)->with('propertyPhotos')->get();

        return view('details.show', compact('property'));
    }
}
