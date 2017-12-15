<?php

namespace App\Http\Controllers;

use App\Property;
use App\PropertyPhoto;

class AllPropertyController extends Controller
{

    public function show($title)
    {
        $property = Property::where('title', '=', $title)->with('propertyPhotos')->get();
        

        return view('details.show', compact('property'));
    }

    public function destroy($id)
    {
        PropertyPhoto::findOrFail($id)->delete();

        return back();

    }

}
