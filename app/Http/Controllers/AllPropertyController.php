<?php

namespace App\Http\Controllers;

use App\Property;
use App\PropertyPhoto;

class AllPropertyController extends Controller
{
    

    public function show($title)
    {
       $properties = Property::heading($title)->get();

      return view('details.show', compact('properties'));
    }

    public function destroy($id)
    {
        PropertyPhoto::findOrFail($id)->delete();

        return back();

    }

}
