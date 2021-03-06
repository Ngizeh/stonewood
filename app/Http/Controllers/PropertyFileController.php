<?php

namespace App\Http\Controllers;

use App\Property;
use App\PropertyFile;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class PropertyFileController extends Controller
{
    public function addDoc(Request $request, $location, $title)
    {
        $this->validate($request, ['file' => 'required|mimes:pdf|max:2000']);

        $propertyFile= $this->makeDoc($request->file('file'));

        Property::locatedAt($location, $title)->addDoc($propertyFile);

    }

    protected function makeDoc(UploadedFile $file)
    {
        return PropertyFile::named($file->getClientOriginalName())->move($file);
    }
}
