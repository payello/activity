<?php

namespace App;

class Comment extends Model
{

    /**
     * Gets the posts relating to the comment.
     */
    public function post()
    {
        return $this->belongsTo(Post::Class);
    }

    /**
     * Gets the user related to the comment.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::Class);
    }


}
