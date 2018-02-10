<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    protected $fillable = [
        'title',
        'location',
        'price',
        'price_currency',
        'service_charge',
        'service_currency',
        'listed',
        'description',
        'commercial',
        'residential',
        'land',
        'bedroom',
        'bathroom',
        'sittingroom',
        'garage',
        'reference_number'
        ];

    public static function locatedAt($location , $title)
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

    public function title_heading()
    {
      return str_replace(' ', '-', $this->title);
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
    public function lands()
    {
      return $this->hasMany(Land::class);
    }

    public function price_format()
    {
      return number_format($this->price);
    }
    public function service_charging()
    {
        return number_format($this->service_charge);
    }

    public function setPriceAttribute($price)
    {
      $this->attributes['price'] = str_replace(',', '', $price);
    }

    public function setServiceChargeAttribute($service_charge)
    {
        if ($service_charge == true)
        {
            $this->attributes['service_charge'] = str_replace(',', '', $service_charge);
        }
        else  return null;

    }
}
