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
        'name' => 'Independent Digital Services',
        'email' => 'admin@ids.com',
        'password' => bcrypt('password'),
    ]);
    }
}
