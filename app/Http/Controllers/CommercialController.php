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
      $property = Property::whereNotNull('commercial')->latest()->paginate(15);
      
      return view('.commercial.commercials', compact('property'));
  }

  public function sales()
  {
    $property = Property::where('listed', '=', 'Sale')
                ->whereNotNull('commercial')->latest()->paginate(15);

    return view('commercial.sales', compact('property'));
  }

  public function rentals()
  {
      $property = Property::where('listed', '=', 'Rental')
                  ->whereNotNull('commercial')->latest()->paginate(15);

      return view('commercial.rentals', compact('property'));
  }

}
