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
            'user' => 'user1',
            'email' => 'paulinist@outlook.com',
            'password' => bcrypt('secret'),
        ]);

    }
}
