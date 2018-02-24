<?php

namespace App\Http\Controllers;

use App\CommercialCategory;
use App\Currency;
use App\LandCategory;
use App\Listed;
use App\Property;
use App\PropertyPhoto;
use App\ResidentialCategory;
use Illuminate\Http\Request;
use App\Http\Requests\PropertyRequest;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class PropertyController extends Controller

{
    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show']);
    }

    public function index(Property $property)
    {
            if (Auth::user()) {
                $properties = $property->where('user_id', Auth::id())->with('propertyPhotos')->paginate(9);
            } else
                $properties = $property->with('propertyPhotos')->paginate(9);

            return view('property.index', compact('properties'));

    }

    public function create(Property $property)
    {
        $commercialCategory = CommercialCategory::all();
        $landCategory = LandCategory::all();
        $residentialCategory = ResidentialCategory::all();
        $listed = Listed::all();
        $currency =Currency::all();
        return view('property.create', compact('property', 'commercialCategory',
            'landCategory', 'residentialCategory', 'listed', 'currency'));
    }

    public function store(PropertyRequest $request, Property $property)
    {
        $property = new Property($request->all());

        $property['reference_number'] = substr(md5(mt_rand()), 0,7);;

        Auth::user()->properties()->save($property);

        return redirect($property->path());
    }

    public function show(Property $property, $location, $title)
    {
       $property = (Property::locatedAt($location, $title))->load('propertyPhotos');

        return view('property.show', compact('property'));
    }

    public function addPhoto(Request $request, $location, $title)
    {
        $this->validate($request, ['photo' => 'required|mimes:jpg,jpeg,png,bmp']);

        $propertyPhoto = $this->makePhoto($request->file('photo'));

        Property::locatedAt($location, $title)->addPhoto($propertyPhoto);

    }

    protected function makePhoto(UploadedFile $file)
    {
        return PropertyPhoto::named($file->getClientOriginalName())->move($file);
    }

    public function edit(Property $property, Request $request)
    {
        $commercialCategory = CommercialCategory::all();
        $landCategory = LandCategory::all();
        $residentialCategory = ResidentialCategory::all();
        $listed = Listed::all();
        $currency =Currency::all();

        return view('property.edit', compact('property', 'commercialCategory',
            'landCategory', 'residentialCategory', 'listed', 'currency'));
    }

    public function update(Request $request, Property $property)
    {
        $property->update($request->all());

        return redirect('property');
    }

    

}
