<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    protected $fillable = ['activity_name'];

    /**
     * Get the posts belonging to the activity.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function posts()
    {
        return $this->belongsToMany('App\Post', 'activity_post', 'activity_id', 'post_id');
    }

    /**
     *  Get the route key for the model.
     *
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'activity_name';
    }

}
