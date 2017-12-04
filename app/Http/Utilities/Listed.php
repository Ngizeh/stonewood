<?php

namespace App\Http\Utilities;

class Listed
{
    protected static $listed = array(
        'Rentals',
        'Sales',
    );

    public static function all()
    {
        return static::$listed;
    }
}