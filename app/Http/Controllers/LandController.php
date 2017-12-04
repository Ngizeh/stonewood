<?php

namespace App\Http\Controllers;

use App\Land;
use App\Property;
use Illuminate\Http\Request;
use App\Http\Requests\LandRequest;

class LandController extends Controller
{

    public function index()
    {
        $property = Property::whereNotNull('land')->get();

        return view('land.lands', compact('property'));
    }

    public function sales()
    {
        $property = Property::where('listed', '=', 'Sales')
            ->whereNotNull('land')->get();

        return view('land.sales', compact('property'));
    }

    public function rentals()
    {
        $property = Property::where('listed', '=', 'Rentals')
            ->whereNotNull('land')->get();

        return view('land.rentals', compact('property'));
    }

}