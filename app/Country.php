<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    /**
     * Gets the posts relating to the country.
     */
    public function posts()
    {
        return $this->hasMany('App\Post');
    }
}
