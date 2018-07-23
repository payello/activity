<?php

use App\Comment;
use Illuminate\Database\Seeder;

class CommentsTableSeeder extends Seeder
{
    protected $comments = [
        [
            'user_id' => 1,
            'post_id' => 1,
            'body' => 'This is a great place! I love it here'
        ],
        [
            'user_id' => 1,
            'post_id' => 2,
            'body' => 'If you like cycling you must visit!'
        ],
        [
            'user_id' => 1,
            'post_id' => 1,
            'body' => 'I would love to go here.'
        ]
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->comments as $comment) {
            Comment::firstOrCreate($comment);
        }
    }
}

