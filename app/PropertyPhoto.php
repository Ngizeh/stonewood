<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Intervention\Image\Facades\Image;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class PropertyPhoto extends Model
{
    protected $fillable = [
        'path', 'name', 'thumbnail_path'
    ];

    protected $baseDir = 'properties/photos';

    public function property()
    {
        return $this->belongsTo(Property::class);
    }

    public static function named($name)
    {
        return (new static)->saveAs($name);
    }

    public function saveAs($name)
    {
        $this->name = sprintf("%s-%s", time(), $name);
        $this->path = sprintf("%s/%s", $this->baseDir, $this->name);
        $this->thumbnail_path = sprintf("%s/tn-%s", $this->baseDir, $this->name);

        return $this;

    }

    public function move(UploadedFile $file)
    {
        $file->move($this->baseDir, $this->name);

        $this->makeThumbnail();

        return $this;
    }

    protected function makeThumbnail()
    {
        Image::make($this->path)->fit(374, 250)->save($this->thumbnail_path);
    }
}
