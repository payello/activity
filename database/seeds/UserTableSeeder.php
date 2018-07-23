<?php

use App\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    protected $users = [
        [
            'name' => 'Peter Wright',
            'email' => 'test@example.com',
            'password' => 'password',
        ],
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->users as $user) {
            User::firstOrCreate($user);
        }
    }
}
