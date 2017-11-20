<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Post;

class CommentController extends Controller
{

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
      public function store(Post $post)
      {
        $this->validate(request(), ['body'=> 'required|min:2']);

            Comment::create([
              'body'=> request('body'),
              'post_id'=>$post->id,
              'user_id'=>auth()->id()
            ]);

            return back();
      }

  }
