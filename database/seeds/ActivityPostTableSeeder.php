<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class ActivityPostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('activity_post')->insert([
            [
                'activity_id' => 1,
                'post_id' => 1,
            ],
            [
                'activity_id' => 2,
                'post_id' => 1,
            ],
            [
                'activity_id' => 3,
                'post_id' => 2,
            ],
        ]);
    }
}
