<?php

namespace App\Http\Utilities;

class Listed
{
    protected static $listed = array(
        'Rental',
        'Sale',
    );

    public static function all()
    {
        return static::$listed;
    }
}