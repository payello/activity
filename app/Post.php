<?php

namespace App;

class Post extends Model
{
  public function comments()
  {
      return $this->hasMany(Comment::class);
  }
  public function user()
  {
      return $this->belongsTo(User::class);
  }
  public function addComment($body)
  {
      $this ->comments()->create(compact('body'));
  }
  public function activities()
  {
      return $this->belongsToMany('App\Activity');
  }
  public function countries()
  {
    return $this->belongsTo('App\Country', 'country_id');
  }

}
