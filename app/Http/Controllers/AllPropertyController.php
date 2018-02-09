<?php

namespace App\Http\Controllers;

use App\Property;
use App\PropertyPhoto;
use Illuminate\Http\Request;
use App\Http\Requests\PropertyRequest;

class AllPropertyController extends Controller
{
 
    public function __construct()
    {
        $this->middleware('auth')->except(['show']);
    }

    public function show($title)
    {
        $properties = Property::heading($title)->load('propertyPhotos');

        return view('details.show', compact('properties'));
    }

    public function destroy($id)
    {
        PropertyPhoto::findOrFail($id)->delete();

        return back();

    }

}
