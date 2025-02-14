<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserTableSeeder::class);
        $this->call(ActivitiesTableSeeder::class);
        $this->call(CommentsTableSeeder::class);
        $this->call(CountriesTableSeeder::class);
        $this->call(PostTableSeeder::class);
//        $this->call(ActivityPostTableSeeder::class);
    }
}
