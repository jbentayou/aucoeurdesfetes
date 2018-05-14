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
        $this->call(UsersTableSeeder::class);
        //$this->call(MapsTableSeeder::class);
        
        //new
        $this->call(ContenuTableSeeder::class);
        $this->call(ParcFestayreTableSeeder::class);
        $this->call(ParcFamilleTableSeeder::class);
        $this->call(ParcEnfantTableSeeder::class);
        $this->call(MonumentsTableSeeder::class);
    }
}
