<?php

namespace App\Http\Controllers;

use App\Listed;
use App\Property;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RentalsController extends Controller
{
    public function index(Property $property)
    {
        if (Auth::user()) {
            $properties = $property->where('user_id', Auth::id())->with('propertyPhotos')->paginate(9);
        } else
        $properties = Property::where('listed', '=', 'Rental')
            ->with('propertyPhotos')->paginate(9);

         return view('rent', compact('properties'));
    }
}
