<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    protected $fillable = ['title', 'location', 'price', 'category', 'listing', 'description','phone_number'];

    public static function locatedAt($location, $title)
    {
        $location = str_replace('-', ' ', $location);

        $title = str_replace('-', ' ', $title);

        return static::where(compact('location', 'title'))->firstOrFail();
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
        return str_replace('-', '', $this->location).'/'.str_replace('-','', $this->title);
    }


}
