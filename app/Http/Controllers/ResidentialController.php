<?php

namespace App\Http\Controllers;

use App\Http\Requests\ResidentialRequest;
use App\Property;
use App\Residential;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ResidentialController extends Controller
{
    public function index()
    {
        if (Auth::user()) {
            $properties = Property::whereNotNull('residential')->where('user_id', Auth::id())
                ->paginate(9);
        }else
        $properties = Property::whereNotNull('residential')->paginate(9);

      return view('residential.residentials', compact('properties')) ;
    }
    public function sales()
    {
        if(Auth::user()){
            $properties = Property::where('listed', '=', 'Sale')
                ->whereNotNull('residential')->where('user_id', Auth::id())->paginate(9);
        }else
        $properties = Property::where('listed', '=', 'Sale')
            ->whereNotNull('residential')->paginate(9);

        return view('residential.sales', compact('properties'));
    }

    public function rentals()
    {
        if(Auth::user()){
            $properties = Property::where('listed', '=', 'Rental')
                ->whereNotNull('residential')->where('user_id', Auth::id())->paginate(9);
        }else
        $properties = Property::where('listed', '=', 'Rental')
            ->whereNotNull('residential')->paginate(9);

        return view('residential.rentals', compact('properties'));
    }
}
