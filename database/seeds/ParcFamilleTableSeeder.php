<?php

use Illuminate\Database\Seeder;

class ParcFamilleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('parc_familles')->insert([
            'ordre' => '1', //unique
            'video' => '3', // id dans table Contenu
        ]);
        DB::table('parc_familles')->insert([
            'ordre' => '2', //unique
            'video' => '13', // id dans table Contenu
        ]);
        DB::table('parc_familles')->insert([
            'ordre' => '3', //unique
            'video' => '14', // id dans table Contenu
        ]);
        DB::table('parc_familles')->insert([
            'ordre' => '4', //unique
            'video' => '15', // id dans table Contenu
        ]);
        DB::table('parc_familles')->insert([
            'ordre' => '5', //unique
            'video' => '25', // id dans table Contenu
        ]);
        DB::table('parc_familles')->insert([
            'ordre' => '6', //unique
            'video' => '27', // id dans table Contenu
        ]);
        DB::table('parc_familles')->insert([
            'ordre' => '7', //unique
            'video' => '34', // id dans table Contenu
        ]);
        DB::table('parc_familles')->insert([
            'ordre' => '8', //unique
            'video' => '36', // id dans table Contenu
        ]);
        DB::table('parc_familles')->insert([
            'ordre' => '9', //unique
            'video' => '37', // id dans table Contenu
        ]);
        DB::table('parc_familles')->insert([
            'ordre' => '10', //unique
            'video' => '41', // id dans table Contenu
        ]);
        DB::table('parc_familles')->insert([
            'ordre' => '11', //unique
            'video' => '42', // id dans table Contenu
        ]);
        DB::table('parc_familles')->insert([
            'ordre' => '12', //unique
            'video' => '49', // id dans table Contenu
        ]); 
        DB::table('parc_familles')->insert([
            'ordre' => '13', //unique
            'video' => '57', // id dans table Contenu
        ]);
        DB::table('parc_familles')->insert([
            'ordre' => '14', //unique
            'video' => '58', // id dans table Contenu
        ]);
        DB::table('parc_familles')->insert([
            'ordre' => '15', //unique
            'video' => '65', // id dans table Contenu
        ]);
        DB::table('parc_familles')->insert([
            'ordre' => '16', //unique
            'video' => '78', // id dans table Contenu
        ]);
        
    }
}