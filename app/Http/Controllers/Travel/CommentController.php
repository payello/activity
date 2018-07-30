<?php

namespace App\Http\Controllers\Travel;

use App\Post;
use App\Comment;
use App\Http\Controllers\Controller;

class CommentController extends Controller
{

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Post $post
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Post $post)
    {
        $this->validate(request(), ['body' => 'required|min:2']);

        Comment::create([
            'body' => request('body'),
            'post_id' => $post->id,
            'user_id' => auth()->id()
        ]);

        return back();
    }
}
