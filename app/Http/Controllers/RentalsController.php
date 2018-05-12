<?php

namespace App\Http\Controllers;

use App\Listed;
use App\Property;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RentalsController extends Controller
{
    public function index()
    {
        if (Auth::user()) {
            $properties = Property::where('listed', '=', 'Rental')
                ->where('user_id', Auth::id())
                ->with('propertyPhotos')->orderBy('created_at', 'desc')->paginate(9);
        } else
        $properties = Property::where('listed', '=', 'Rental')
            ->with('propertyPhotos')->orderBy('created_at', 'desc')->paginate(9);

         return view('rent', compact('properties'));
    }
}
