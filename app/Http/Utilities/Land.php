<?php

namespace App\Http\Utilities;

class Land
{
    protected static $land = array(
        'Vacant',
        'Development',
    );

    public static function all()
    {
        return static::$land;
    }
}