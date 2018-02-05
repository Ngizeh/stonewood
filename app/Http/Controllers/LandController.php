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
        $properties = Property::whereNotNull('land')->latest()->paginate(15);

        return view('land.lands', compact('properties'));
    }

    public function sales()
    {
        $properties = Property::where('listed', '=', 'Sale')
            ->whereNotNull('land')->latest()->paginate(15);

        return view('land.sales', compact('properties'));
    }

    public function development()
    {
        $properties = Property::where('listed', '=', 'Development')
            ->whereNotNull('land')->latest()->paginate(15);

        return view('land.development', compact('properties'));
    }

}