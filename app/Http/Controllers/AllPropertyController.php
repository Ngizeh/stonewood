<?php

namespace App\Http\Controllers;

use App\Property;
use App\PropertyPhoto;

class AllPropertyController extends Controller
{
    

    public function show(Property $property, $title)
    {
       $property = Property::heading($title)->get();

      return view('details.show', compact('property'));
    }

    public function destroy($id)
    {
        PropertyPhoto::findOrFail($id)->delete();

        return back();

    }

}
