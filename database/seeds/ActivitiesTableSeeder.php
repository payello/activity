<?php

use Illuminate\Database\Seeder;

class ActivitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $post = new \App\Post([
           'activity_name'=>'Cycling'
        ]);
        $post->save();

        $post = new \App\Post([
            'activity_name'=>'Skiing'
        ]);

        $post = new \App\Post([
            'activity_name'=>'Snowboarding'
        ]);
    }

}