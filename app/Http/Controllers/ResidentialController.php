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
        $property = Property::whereNotNull('residential')->latest()->paginate(15);

      return view('residential.residentials', compact('property')) ;
    }
    public function sales()
    {
        $property = Property::where('listed', '=', 'Sales')
            ->whereNotNull('residential')->latest()->paginate(15);

        return view('residential.sales', compact('property'));
    }

    public function rentals()
    {
        $property = Property::where('listed', '=', 'Rentals')
            ->whereNotNull('residential')->latest()->paginate(15);

        return view('residential.rentals', compact('property'));
    }
}