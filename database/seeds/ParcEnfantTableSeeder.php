<?php

use Illuminate\Database\Seeder;

class ParcEnfantTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('parc_enfants')->insert([
            'ordre' => '1', //unique
            'video' => '1', // id dans table Contenu
        ]);
        DB::table('parc_enfants')->insert([
            'ordre' => '2', //unique
            'video' => '14', // id dans table Contenu
        ]);
        DB::table('parc_enfants')->insert([
            'ordre' => '3', //unique
            'video' => '18', // id dans table Contenu
        ]);
        DB::table('parc_enfants')->insert([
            'ordre' => '4', //unique
            'video' => '19', // id dans table Contenu
        ]);
        DB::table('parc_enfants')->insert([
            'ordre' => '5', //unique
            'video' => '21', // id dans table Contenu
        ]);
        DB::table('parc_enfants')->insert([
            'ordre' => '6', //unique
            'video' => '23', // id dans table Contenu
        ]);
        DB::table('parc_enfants')->insert([
            'ordre' => '7', //unique
            'video' => '24', // id dans table Contenu
        ]);
        DB::table('parc_enfants')->insert([
            'ordre' => '8', //unique
            'video' => '25', // id dans table Contenu
        ]);
        DB::table('parc_enfants')->insert([
            'ordre' => '9', //unique
            'video' => '38', // id dans table Contenu
        ]);
        DB::table('parc_enfants')->insert([
            'ordre' => '10', //unique
            'video' => '45', // id dans table Contenu
        ]);
        DB::table('parc_enfants')->insert([
            'ordre' => '11', //unique
            'video' => '78', // id dans table Contenu
        ]);
        DB::table('parc_enfants')->insert([
            'ordre' => '12', //unique
            'video' => '79', // id dans table Contenu
        ]);
    }
}