<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Symfony\Component\HttpFoundation\File\UploadedFile;

class PropertyFile extends Model
{
    protected $fillable = [
      'name', 'path'
    ];

    protected $baseDir  = 'properties/files';

    public function propertyFiles()
    {
        return $this->belongsTo(Property::class);
    }

    public function addDoc(PropertyFile $propertyFile)
    {
        return $this->propertyFiles()->save($propertyFile);
    }

    public static function named($name)
    {
        return (new static)->saveAs($name);
    }

    public function saveAs($name)
    {
        $this->name = sprintf("%s-%s", time(), $name);

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
            $this->path,
            $this->name
        ]);

        parent::delete();
    }



}
