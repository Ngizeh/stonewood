<?php

namespace App\Http\Controllers;

use App\Http\Requests\PropertyRequest;
use App\Property;
use App\User;
use App\PropertyPhoto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class PropertyController extends Controller

{
    public function __construct()
    {
        $this->middleware('auth')->except('index');
    }

    public function index(Property $property)
    {
        $property = $property->with('propertyPhotos')->get();
        return view('property.index', compact('property'));
    }

    public function create()
    {
        return view('property.create');
    }

    public function store(PropertyRequest $request, Property $property)
    {
        $property = Auth::user()->properties()->create($request->all());

        return redirect($property->path());
    }

    public function show($location, $title)
    {
        $property = Property::locatedAt($location, $title);

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
}
