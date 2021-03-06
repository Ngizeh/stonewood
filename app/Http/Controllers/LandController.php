<?php

namespace App\Http\Controllers;

use App\Land;
use App\Property;
use Illuminate\Http\Request;
use App\Http\Requests\LandRequest;
use Illuminate\Support\Facades\Auth;

class LandController extends Controller
{

    public function index()
    {
        if (Auth::user()) {
            $properties =Property::whereNotNull('land')->where('user_id', Auth::id())->with('propertyPhotos')
                         ->orderBy('created_at', 'desc')->paginate(9);
        } else
        $properties = Property::whereNotNull('land')->orderBy('created_at', 'desc')->paginate(9);

        return view('land.lands', compact('properties'));
    }

    public function sales()
    {
        if (Auth::user()) {
            $properties =Property::where('listed', '=', 'Sale')
                ->whereNotNull('land')->where('user_id', Auth::id())
                ->with('propertyPhotos')->orderBy('created_at', 'desc')->paginate(9);
        } else
        $properties = Property::where('listed', '=', 'Sale')
                   ->whereNotNull('land')->orderBy('created_at', 'desc')->paginate(9);

        return view('land.sales', compact('properties'));
    }

    public function development(Property $property)
    {
        if (Auth::user()) {
            $properties = Property::where('listed', '=', 'Development')
                ->whereNotNull('land')->where('user_id', Auth::id())
                ->with('propertyPhotos')->orderBy('created_at', 'desc')->paginate(9);
        } else
        $properties = Property::where('listed', '=', 'Development')
            ->whereNotNull('land')->paginate(9);

        return view('land.development', compact('properties'));
    }

}