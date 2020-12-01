<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    public static function filter($string)
    {
        $query  = self::where(['name'=> $string])->get();

        return $query;
    }
}
