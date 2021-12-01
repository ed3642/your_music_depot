<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserType extends Model
{
    public $timestamps = false;

    protected $table = 'user_types';

    public static function typeId($type)
    {
        return static::where('type', $type)->first()->id;
    }

    // Function to return the user Type
    public function users()
    {
        return $this->hasMany(User::class);
    }
}
