<?php

namespace App\Http\Controllers;

use App\Commercial;
use App\Land;
use App\Property;
use Illuminate\Http\Request;
use App\Http\Requests\CommercialRequest;


class CommercialController extends Controller
{
  public function index()
  {
      $properties = Property::whereNotNull('commercial')->latest()->paginate(9);
      
      return view('.commercial.commercials', compact('properties'));
  }

  public function sales()
  {
    $properties = Property::where('listed', '=', 'Sale')
                ->whereNotNull('commercial')->latest()->paginate(15);

    return view('commercial.sales', compact('properties'));
  }

  public function rentals()
  {
      $properties = Property::where('listed', '=', 'Rental')
                  ->whereNotNull('commercial')->latest()->paginate(15);

      return view('commercial.rentals', compact('properties'));
  }


}
