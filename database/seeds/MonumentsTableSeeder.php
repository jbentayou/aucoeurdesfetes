<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MonumentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('monuments')->insert([
            'titre' => 'Les arènes',
            'image' => 'arenes_grande.png', //lien 
            'latitude' => '-1.488676',
            'longitude' => '43.494920',
        ]);
        DB::table('monuments')->insert([
            'titre' => 'La cathédrale Ste-Marie',
            'image' => 'cathedrale_grande.png', //lien 
            'latitude' => '-1.477269',
            'longitude' => '43.490579',
        ]);
        DB::table('monuments')->insert([
            'titre' => 'L\'église St-André',
            'image' => 'eglise_grande.png', //lien 
            'latitude' => '-1.470972',
            'longitude' => '43.490558',
        ]);
        DB::table('monuments')->insert([
            'titre' => 'La fontaine St-Esprit',
            'image' => 'fontaineStEsprit_grande.png', //lien 
            'latitude' => '-1.469533',
            'longitude' => '43.495786',
        ]);
        DB::table('monuments')->insert([
            'titre' => 'La gare',
            'image' => 'gare_grande.png', //lien 
            'latitude' => '-1.470170',
            'longitude' => '43.496974',
        ]);
        DB::table('monuments')->insert([
            'titre' => 'Les halles',
            'image' => 'halles_grande.png', //lien 
            'latitude' => '-1.475093',
            'longitude' => '43.490012',
        ]);
        DB::table('monuments')->insert([
            'titre' => 'La mairie',
            'image' => 'mairie_grande.png', //lien 
            'latitude' => '-1.475100',
            'longitude' => '43.493273',
        ]);
        DB::table('monuments')->insert([
            'titre' => 'Le pont Génie',
            'image' => 'pontGenie_grande.png', //lien 
            'latitude' => '-1.474901',
            'longitude' => '43.487896',
        ]);
        DB::table('monuments')->insert([
            'titre' => 'Le pont Marengo',
            'image' => 'pontMarengo_grande.png', //lien 
            'latitude' => '-1.474077',
            'longitude' => '43.492336',
        ]);
        DB::table('monuments')->insert([
            'titre' => 'Le pont Mayou',
            'image' => 'pontMayou_grande.png', //lien 
            'latitude' => '-1.474557',
            'longitude' => '43.489755',

        ]);
        DB::table('monuments')->insert([
            'titre' => 'Le pont Pannecau',
            'image' => 'pontPannecau_grande.png', //lien 
            'latitude' => '-1.474343',
            'longitude' => '43.491010',
        
        ]);
        DB::table('monuments')->insert([
            'titre' => 'Le pont St-Esprit',
            'image' => 'pontStEsprit_grande.png', //lien 
            'latitude' => '-1.471788',
            'longitude' => '43.494281',
        ]);
        DB::table('monuments')->insert([
            'titre' => 'Le rail bayonnais',
            'image' => 'rail_grande.png', //lien 
            'latitude' => '-1.468254',
            'longitude' => '43.496241',
        ]);
        DB::table('monuments')->insert([
            'titre' => 'La statue du Cardinal Lavigerie',
            'image' => 'statueReduit_grande.png', //lien 
            'latitude' => '-1.473444',
            'longitude' => '43.493349',
        ]);
        DB::table('monuments')->insert([
            'titre' => 'Le trinquet',
            'image' => 'trinquet_grande.png', //lien 
            'latitude' => '-1.487093',
            'longitude' => '43.491293',
        ]);
        
    }
}