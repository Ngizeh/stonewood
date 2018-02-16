<?php

namespace App\Http\Controllers;

use App\Http\Requests\ResidentialRequest;
use App\Property;
use App\Residential;
use Illuminate\Http\Request;

class ResidentialController extends Controller
{
    public function index()
    {
        $properties = Property::whereNotNull('residential')->latest()->paginate(9);

      return view('residential.residentials', compact('properties')) ;
    }
    public function sales()
    {
        $properties = Property::where('listed', '=', 'Sale')
            ->whereNotNull('residential')->latest()->paginate(15);

        return view('residential.sales', compact('properties'));
    }

    public function rentals()
    {
        $properties = Property::where('listed', '=', 'Rental')
            ->whereNotNull('residential')->latest()->paginate(15);

        return view('residential.rentals', compact('properties'));
    }
}
