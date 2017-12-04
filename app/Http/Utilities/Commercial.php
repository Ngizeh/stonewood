<?php

namespace App\Http\Utilities;

class Commercial
{
    protected static $commercial = array(
        'Office Space',
        'Go Downs',
        'Offices'
    );

    public static function all()
    {
        return static::$commercial;
    }
}