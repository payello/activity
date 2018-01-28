<?php

use Illuminate\Database\Seeder;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $post = new \App\Post([
            'user_id'=>1,
            'post_id'=>1,
            'body'=>'This is a great place! I love it here'
        ]);
        $post->save();

        $post = new \App\Post([
            'user_id'=>1,
            'post_id'=>1,
            'body'=>'I would love to go here.'
        ]);

        $post = new \App\Post([
            'user_id'=>1,
            'post_id'=>2,
            'body'=>'If you like cycling you must visit!'
            ]);
    }
}

