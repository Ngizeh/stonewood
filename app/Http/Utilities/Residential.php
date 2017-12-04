<?php

namespace App\Http\Utilities;

class Residential
{
    protected static $residential = array(
        'Apartment',
        'Condos',
        'Duplexes',
        'Houses',
        'Bungalow',
        'Villas',
    );

    public static function all()
    {
        return static::$residential;
    }
}