<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class PropertyVideo extends Model
{
    protected $fillable = [
        'path', 'name',
    ];

    protected $baseDir = 'properties/videos';

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
        $this->path = sprintf("%s/%s", $this->baseDir, $this->name);;

        return $this;

    }

    public function move(UploadedFile $file)
    {
        $file->move($this->baseDir, $this->name);

        return $this;
    }


    public function delete()
    {
        \File::delete([
            $this->name,
            $this->path,
        ]);

        parent::delete();
    }
}
