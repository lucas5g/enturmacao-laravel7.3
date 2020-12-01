<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    public static function filter($string)
    {
        $query  = self::where('name', 'like', "%$string%")
        ->orWhere('registration', 'like', "%$string%")
        ->orWhere('previous_class', 'like', "%$string%")
        ->orderBy('name', 'asc')
        ->limit(30)
        ->get();

        return $query;
    }
}
