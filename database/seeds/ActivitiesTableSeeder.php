<?php

use App\Activity;
use Illuminate\Database\Seeder;

class ActivitiesTableSeeder extends Seeder
{
    /**
     *
     * @var
     */
    protected $activities = [
        ['activity_name' => 'Cycling'],
        ['activity_name' => 'Skiing'],
        ['activity_name' => 'Snowboarding'],
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->activities as $activity) {
            Activity::firstOrCreate($activity);
        }
    }

}