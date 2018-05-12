<?php

namespace App\Http\Controllers;

use App\Commercial;
use App\Land;
use App\Property;
use Illuminate\Http\Request;
use App\Http\Requests\CommercialRequest;
use Illuminate\Support\Facades\Auth;


class CommercialController extends Controller
{
  public function index(Property $property)
  {
      if (Auth::user()) {
          $properties = $property->where('user_id', Auth::id())->with('propertyPhotos')
                        ->orderBy('created_at', 'desc')->paginate(9);
      } else
      $properties = Property::whereNotNull('commercial')
                    ->orderBy('created_at', 'desc')->paginate(9);
      
      return view('.commercial.commercials', compact('properties'));
  }

  public function sales(Property $property)
  {
      if (Auth::user()) {
          $properties = $property->where('user_id', Auth::id())->with('propertyPhotos')
                        ->orderBy('created_at', 'desc')->paginate(9);
      } else
      $properties = Property::where('listed', '=', 'Sale')
                ->whereNotNull('commercial')
                ->orderBy('created_at', 'desc')->paginate(9);

    return view('commercial.sales', compact('properties'));
  }

  public function rentals(Property $property)
  {
      if (Auth::user()) {
          $properties = $property->where('user_id', Auth::id())->with('propertyPhotos')
                        ->orderBy('created_at', 'desc')->paginate(9);
      } else
      $properties = Property::where('listed', '=', 'Rental')
                  ->whereNotNull('commercial')->orderBy('created_at', 'desc')->paginate(9);

      return view('commercial.rentals', compact('properties'));
  }


}
