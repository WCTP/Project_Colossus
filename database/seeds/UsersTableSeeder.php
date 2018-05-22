<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('users')->insert([
        'name' => 'Game Master',
        'email' => 'master@example.com',
        'password' => bcrypt('password'),
        'username' => 'Master of Games',
        'privilege' => 'game master',
      ]);
    }
}
