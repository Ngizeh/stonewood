<?php

namespace App\Http\Controllers;

use App\Property;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SalesController extends Controller

{
    public function index()
    {
        if (Auth::user()) {
            $properties = Property::where('listed', '=', 'Sale')->where('user_id', Auth::id())
            ->with('propertyPhotos')->paginate(9);
        } else
        $properties = Property::where('listed', '=', 'Sale')
            ->with('propertyPhotos')->paginate(9);

        return view('sale', compact('properties'));
    }
}
