<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    protected $fillable = ['title', 'location', 'price','service_charge','listed',
        'description', 'commercial', 'residential', 'land'];

    public static function locatedAt($location, $title)
    {
        $location = str_replace('-', ' ', $location);

        $title = str_replace('-', ' ', $title);

        return static::where(compact('location', 'title'))->firstOrFail();
    }

    public static function heading($title)
    {
        $title = str_replace('-', ' ', $title);

        return static::where(compact('title'));
    }


    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function propertyPhotos()
    {
        return $this->hasMany(PropertyPhoto::class);
    }

    public function addPhoto(PropertyPhoto $propertyPhoto)
    {
        return $this->propertyPhotos()->save($propertyPhoto);
    }

    public function path()
    {
        return str_replace(' ', '-', $this->location).
            '/'.str_replace(' ','-', $this->title);
    }

    public function commercials()
    {
      return $this->hasMany(Commercial::class, 'property_id');
    }

    public function addCom(Commercial $commercial)
    {
        return $this->commercials()->save($commercial);
    }

    public function lands()
    {
      return $this->hasMany(Land::class);
    }

    public function addLand(Land $land)
    {
        return $this->lands()->save($land);
    }
    public function residentials()
    {
      return $this->hasMany(Residential::class);
    }

    public function addResi(Residential $residential)
    {
        return $this->residentials()->save($residential);
    }

}
