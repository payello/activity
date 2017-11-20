<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
  protected $fillable = ['activity_name'];


  public function posts()
  {
    return $this->belongsToMany('App\Post');
  }

  public function getRouteKeyName()
  {
    return 'activity_name';
  }

}
