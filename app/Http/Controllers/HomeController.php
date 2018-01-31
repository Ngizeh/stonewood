<?php

namespace App\Http\Controllers;

use App\Property;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
      public function index(Property $property)
      {
          $properties = $property->with('propertyPhotos')->get();

          return view('welcome', compact('properties'));
      }

}
