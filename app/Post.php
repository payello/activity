<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    /**
     * Gets the comments relating to the post.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    /**
     * Gets the user that belongs to the post.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Gets the activities relating to the post.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function activities()
    {
        return $this->belongsToMany('App\Activity', 'activity_post', 'post_id', 'activity_id');
    }

    /**
     * Gets the country related to the post.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function countries()
    {
        return $this->belongsTo('App\Country', 'country_id');
    }

    /**
     * Create comment relating to the post.
     *
     * @param $body
     */
    public function addComment($body)
    {
        $this->comments()->create(compact('body'));
    }
}
