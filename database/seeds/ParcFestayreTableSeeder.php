<?php

use Illuminate\Database\Seeder;

class ParcFestayreTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('parc_festayres')->insert([
            'ordre' => '1', //unique
            'video' => '5', // id dans table Contenu
        ]);
        DB::table('parc_festayres')->insert([
            'ordre' => '2', //unique
            'video' => '7', // id dans table Contenu
        ]);
        DB::table('parc_festayres')->insert([
            'ordre' => '3', //unique
            'video' => '14', // id dans table Contenu
        ]);
        DB::table('parc_festayres')->insert([
            'ordre' => '4', //unique
            'video' => '16', // id dans table Contenu
        ]);
        DB::table('parc_festayres')->insert([
            'ordre' => '5', //unique
            'video' => '17', // id dans table Contenu
        ]);
        DB::table('parc_festayres')->insert([
            'ordre' => '6', //unique
            'video' => '26', // id dans table Contenu
        ]);
        DB::table('parc_festayres')->insert([
            'ordre' => '7', //unique
            'video' => '27', // id dans table Contenu
        ]);
        DB::table('parc_festayres')->insert([
            'ordre' => '8', //unique
            'video' => '30', // id dans table Contenu
        ]);
        DB::table('parc_festayres')->insert([
            'ordre' => '9', //unique
            'video' => '32', // id dans table Contenu
        ]);
        DB::table('parc_festayres')->insert([
            'ordre' => '10', //unique
            'video' => '46', // id dans table Contenu
        ]);
        DB::table('parc_festayres')->insert([
            'ordre' => '11', //unique
            'video' => '51', // id dans table Contenu
        ]);
        DB::table('parc_festayres')->insert([
            'ordre' => '12', //unique
            'video' => '56', // id dans table Contenu
        ]); 
        DB::table('parc_festayres')->insert([
            'ordre' => '13', //unique
            'video' => '59', // id dans table Contenu
        ]);
        DB::table('parc_festayres')->insert([
            'ordre' => '14', //unique
            'video' => '60', // id dans table Contenu
        ]);
        DB::table('parc_festayres')->insert([
            'ordre' => '15', //unique
            'video' => '71', // id dans table Contenu
        ]);
        DB::table('parc_festayres')->insert([
            'ordre' => '16', //unique
            'video' => '73', // id dans table Contenu
        ]);
        DB::table('parc_festayres')->insert([
            'ordre' => '17', //unique
            'video' => '74', // id dans table Contenu
        ]);
        DB::table('parc_festayres')->insert([
            'ordre' => '18', //unique
            'video' => '77', // id dans table Contenu
        ]);
        DB::table('parc_festayres')->insert([
            'ordre' => '19', //unique
            'video' => '78', // id dans table Contenu
        ]);
    }
}