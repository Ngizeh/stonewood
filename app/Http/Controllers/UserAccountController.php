<?php

namespace App\Http\Controllers;

use App\Property;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserAccountController extends Controller
{
    public function index(Property $property)
    {
        $properties = $property->where('user_id', Auth::id())->with('propertyPhotos')->paginate(1);

        return view('user_account',compact('properties'));
    }
}
