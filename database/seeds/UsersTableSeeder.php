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
            'name' => 'Roland',
            'email' => 'atelieraudiovisueldupays@gmail.com',
            'password' => bcrypt('aadpays64600B'),
        ]);
    }
}
