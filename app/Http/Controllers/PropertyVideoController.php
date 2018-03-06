<?php

namespace App\Http\Controllers;

use App\Property;
use App\PropertyVideo;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class PropertyVideoController extends Controller
{
    public function addVideo(Request $request, $location, $title)
    {
        $this->validate($request, ['file' => 'required|file:mp4|max:1000']);

        $propertyVideo= $this->makeVideo($request->file('file'));

        Property::locatedAt($location, $title)->addVideo($propertyVideo);

    }

    protected function makeVideo(UploadedFile $file)
    {
        return PropertyVideo::named($file->getClientOriginalName())->move($file);
    }
}
