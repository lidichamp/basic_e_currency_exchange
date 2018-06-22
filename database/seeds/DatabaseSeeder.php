<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    { DB::table('users')->insert([
        'name' => 'lydia',
        'email' => 'lydia'.'@gmail.com',
        'password' => bcrypt('password'),
    ]);
    }
}
