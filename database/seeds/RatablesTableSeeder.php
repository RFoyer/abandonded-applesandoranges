<?php

use Illuminate\Database\Seeder;

class RatablesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ratables')->insert([
            'ratable' => 'Green Bay Packers',
            'ratings' => [ 'user1' => 5 ],
            'related' => [ 'Chicago Bears' ],
        ]);

    }
}
