<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContenuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contenus')->insert([
            'id' => 1, //unique
            'titre' => 'Départ : place du réduit' ,
            'video' => 'https://www.youtube.com/watch?v=HC-WxWNmePw', //lien
            'miniature' => 'https://img.youtube.com/vi/HC-WxWNmePw/mqdefault.jpg', //lien 
            'latitude' => '-1.47305',
            'longitude' => '43.49294',
            'imgPicto' => 'Icon-Mere.png', //juste le nom
            'imgSurvol' => '72.jpg', //juste le nom
        ]);
        
        DB::table('contenus')->insert([
            'id' => 3, //unique
            'titre' => 'Départ : porte d\'Espagne' ,
            'video' => 'https://www.youtube.com/watch?v=SMybtyZQQ6M', //lien
            'miniature' => 'https://img.youtube.com/vi/SMybtyZQQ6M/mqdefault.jpg', //lien 
            'latitude' => '-1.47817',
            'longitude' => '43.48835',
            'imgPicto' => 'Icon-Mere.png', //juste le nom
            'imgSurvol' => '3.jpg', //juste le nom
        ]);
            
            DB::table('contenus')->insert([
            'id' => 5, //unique
            'titre' => 'Départ : place Paul Bert' ,
            'video' => 'https://www.youtube.com/watch?v=mAtfzxTSlVk', //lien
            'miniature' => 'https://img.youtube.com/vi/mAtfzxTSlVk/mqdefault.jpg', //lien 
            'latitude' => '-1.47104',  
            'longitude' => '43.49009',
            'imgPicto' => 'Icon-Mere.png', //juste le nom
            'imgSurvol' => '5.jpg', //juste le nom
        ]);
        DB::table('contenus')->insert([
            'id' => 7, //unique
            'titre' => 'La foulée du festayre' ,
            'video' => 'https://www.youtube.com/watch?v=gI0JRl1QPYI', //lien
            'miniature' => 'https://img.youtube.com/vi/gI0JRl1QPYI/mqdefault.jpg', //lien 
            'latitude' => '-1.47403',  
            'longitude' => '43.49637',
            'imgPicto' => 'Icon-Fille.png', //juste le nom
            'imgSurvol' => '7.jpg', //juste le nom
        ]);
        DB::table('contenus')->insert([
            'id' => 9, //unique
            'titre' => 'Joutes sétoises' ,
            'video' => 'https://www.youtube.com/watch?v=SYtx7Eh2oHs', //lien
            'miniature' => 'https://img.youtube.com/vi/SYtx7Eh2oHs/mqdefault.jpg', //lien 
            'latitude' => '-1.47451',
            'longitude' => '43.49312', 
            'imgPicto' => 'Icon-Pere.png', //juste le nom
            'imgSurvol' => '9.jpg', //juste le nom
        ]);
        DB::table('contenus')->insert([
            'id' => 10, //unique
            'titre' => 'Pelote basque' ,
            'video' => 'https://www.youtube.com/watch?v=FIUGn5RBoxY', //lien
            'miniature' => 'https://img.youtube.com/vi/FIUGn5RBoxY/mqdefault.jpg', //lien 
            'latitude' => '-1.46877', 
            'longitude' => '43.49631',
            'imgPicto' => 'Icon-Pere.png', //juste le nom
            'imgSurvol' => '10.jpg', //juste le nom
        ]);
        
       
        DB::table('contenus')->insert([
            'id' => 11, //unique
            'titre' => 'Concours d omelettes aux piments' ,
            'video' => 'https://www.youtube.com/watch?v=YyMEt8W4LJE', //lien
            'miniature' => 'https://img.youtube.com/vi/YyMEt8W4LJE/mqdefault.jpg', //lien 
            'latitude' => '-1.47505', 
            'longitude' => '43.49043', 
            'imgPicto' => 'Icon-Pere.png', //juste le nom
            'imgSurvol' => '11.jpg', //juste le nom
        ]);
        
        DB::table('contenus')->insert([
            'id' => 13, //unique
            'titre' => 'Ouverture des fêtes 1' ,
            'video' => 'https://www.youtube.com/watch?v=Jf7rkW1WFoY', //lien
            'miniature' => 'https://img.youtube.com/vi/Jf7rkW1WFoY/mqdefault.jpg', //lien 
            'latitude' => '-1.47471', 
            'longitude' => '43.4932',
            'imgPicto' => 'Icon-Pere.png', //juste le nom
            'imgSurvol' => '13.jpg', //juste le nom
        ]);
        
        DB::table('contenus')->insert([
            'id' => 14, //unique
            'titre' => 'Ouverture des fêtes 2' ,
            'video' => 'https://www.youtube.com/watch?v=ayvUfLMH7q0', //lien
            'miniature' => 'https://img.youtube.com/vi/ayvUfLMH7q0/mqdefault.jpg', //lien 
            'latitude' => '-1.47476',  
            'longitude' => '43.49314',
            'imgPicto' => 'Icon-Fille.png', //juste le nom
            'imgSurvol' => '14.jpg', //juste le nom
        ]);
        
        DB::table('contenus')->insert([
            'id' => 15, //unique
            'titre' => 'Mascleta' ,
            'video' => 'https://www.youtube.com/watch?v=Ry1IL2KYeLU', //lien
            'miniature' => 'https://img.youtube.com/vi/Ry1IL2KYeLU/mqdefault.jpg', //lien 
            'latitude' => '-1.47469',  
            'longitude' => '43.49309',
            'imgPicto' => 'Icon-Pere.png', //juste le nom
            'imgSurvol' => '15.jpg', //juste le nom
        ]);
         DB::table('contenus')->insert([
            'id'=> 16,
            'titre'=>'DJ Set',
            'miniature' => 'https://img.youtube.com/vi/7zqyZus6Mf4/mqdefault.jpg', //lien 
            'video'=>'https://www.youtube.com/watch?v=7zqyZus6Mf4',
            'latitude' => '-1.47128', 
            'longitude' => '43.48973',
            'imgPicto' => 'Icon-Pere.png', //juste le nom
            'imgSurvol' => '16.jpg', //juste le nom
        ]);
      
         DB::table('contenus')->insert([
            'id'=> 17,
            'titre'=>'Dans une pena',
            'miniature' => 'https://img.youtube.com/vi/k3cfi_gdUMA/mqdefault.jpg', //lien 
            'video'=>'https://www.youtube.com/watch?v=k3cfi_gdUMA', //lien
            'latitude' => '-1.47824', 
            'longitude' => '43.48826',
            'imgPicto' => 'Icon-Pere.png', //juste le nom
            'imgSurvol' => '17.jpg', //juste le nom
        ]);
       
         DB::table('contenus')->insert([
            'id'=> 18,
            'titre'=>'Choco Yamboun',
            'video' => 'https://youtu.be/IaiTWHELuI8', //lien
            'miniature' => 'https://img.youtube.com/vi/IaiTWHELuI8/mqdefault.jpg', //lien 
            'latitude' => '-1.47631', 
            'longitude' => '43.48918',
            'imgPicto' => 'Icon-Fils.png', //juste le nom
            'imgSurvol' => '18.jpg', //juste le nom
        ]);
        
         DB::table('contenus')->insert([
            'id'=> 19,
            'titre'=>'Cavalcade',
            'miniature' => 'https://img.youtube.com/vi/HI6dtiWmzZo/mqdefault.jpg', //lien 
            'video'=>'https://www.youtube.com/watch?v=HI6dtiWmzZo', //lien
            'latitude' => '-1.47575', 
            'longitude' => '43.48986',
            'imgPicto' => 'Icon-Fille.png', //juste le nom
            'imgSurvol' => '19.jpg', //juste le nom
        ]);
         DB::table('contenus')->insert([
            'id'=> 20,
            'titre'=>'Encierro tiki, départ',
            'miniature' => 'https://img.youtube.com/vi/1L7pyf2s1S0/mqdefault.jpg', //lien 
            'video'=>'https://www.youtube.com/watch?v=1L7pyf2s1S0',
            'latitude' => '-1.47136', 
            'longitude' => '43.48987', 
            'imgPicto' => 'Icon-Fils.png', //juste le nom
            'imgSurvol' => '20.jpg', //juste le nom
        ]);
         DB::table('contenus')->insert([
            'id'=> 21,
            'titre'=>'Encierro tiki, parcours',
            'miniature' => 'https://img.youtube.com/vi/UtQ9J3_I84Y/mqdefault.jpg', //lien 
            'video'=>'https://www.youtube.com/watch?v=UtQ9J3_I84Y',
            'latitude' => '-1.47239', 
            'longitude' => '43.49212', 
            'imgPicto' => 'Icon-Fils.png', //juste le nom
            'imgSurvol' => '21.jpg', //juste le nom
        ]);
         DB::table('contenus')->insert([
            'id'=> 23,
            'titre'=>'journée des enfants',
            'miniature' => 'https://img.youtube.com/vi/8msR5eSmQIY/mqdefault.jpg', //lien 
            'video'=>'https://www.youtube.com/watch?v=8msR5eSmQIY',
            'latitude' => '-1.4791', 
            'longitude' => '43.49188',
            'imgPicto' => 'Icon-Fille.png', //juste le nom
            'imgSurvol' => '23.jpg', //juste le nom
        ]);
        
         DB::table('contenus')->insert([
            'id'=> 24,
            'titre'=>'Réveil du Roi Léon 1',
            'video'=>'https://www.youtube.com/watch?v=BVDxdBI-_UA',
            'miniature' => 'https://img.youtube.com/vi/BVDxdBI-_UA/mqdefault.jpg', //lien 
            'latitude' => '-1.47479', 
            'longitude' => '43.49324', 
            'imgPicto' => 'Icon-Fille.png', //juste le nom
            'imgSurvol' => '24.jpg', //juste le nom
        ]);
         DB::table('contenus')->insert([
            'id'=> 25,
            'titre'=>'Réveil du Roi Léon 2',
            'video' => 'https://www.youtube.com/watch?v=MzK6G_7yhxo', //lien
            'miniature' => 'https://img.youtube.com/vi/MzK6G_7yhxo/mqdefault.jpg', //lien 
            'latitude' => '-1.47476', 
            'longitude' => '43.49286',
            'imgPicto' => 'Icon-Fille.png', //juste le nom
            'imgSurvol' => '13.jpg', //juste le nom
        ]);
         DB::table('contenus')->insert([
            'id'=> 26,
            'titre' => 'Scène de rue',
            'video' => 'https://www.youtube.com/watch?v=PQXDOhPbLoY',//lien
            'miniature' => 'https://img.youtube.com/vi/PQXDOhPbLoY/mqdefault.jpg', //lien 
            'latitude' => '-1.47715',  
            'longitude' => '43.48948',
            'imgPicto' => 'Icon-Pere.png', //juste le nom
            'imgSurvol' => '26.jpg', //juste le nom
        ]);
         DB::table('contenus')->insert([
            'id'=> 27,
            'titre'=>'Courses de vaches ',
            'video'=>'https://www.youtube.com/watch?v=czJS2LBIuMo', //lien
            'miniature' => 'https://img.youtube.com/vi/czJS2LBIuMo/mqdefault.jpg', //lien 
            'latitude' => '-1.47129', 
            'longitude' => '43.48977',
            'imgPicto' => 'Icon-Pere.png', //juste le nom
            'imgSurvol' => '27.jpg', //juste le nom
        ]);
         DB::table('contenus')->insert([
            'id'=> 28,
            'titre'=>'Scène de rue',
            'video'=>'https://www.youtube.com/watch?v=0zD-L3AYKZI', //lien
            'miniature' => 'https://img.youtube.com/vi/0zD-L3AYKZI/mqdefault.jpg', //lien 
            'latitude' => '-1.47448', 
            'longitude' => '43.49267',
            'imgPicto' => 'Icon-Pere.png', //juste le nom
            'imgSurvol' => '28.jpg', //juste le nom
        ]);
       
         DB::table('contenus')->insert([
            'id'=> 29,
            'titre'=>'La jota',
            'video'=>'https://www.youtube.com/watch?v=RYCg9suq7Ic', //lien
            'miniature' => 'https://img.youtube.com/vi/RYCg9suq7Ic/mqdefault.jpg', //lien 
            'latitude' => '-1.4765', 
            'longitude' => '43.49159',
            'imgPicto' => 'Icon-Mere.png', //juste le nom
            'imgSurvol' => '29.jpg', //juste le nom
        ]);
        
         DB::table('contenus')->insert([
            'id'=> 30,
            'titre'=>'Lancer d\'espadrille',
            'video' => 'https://www.youtube.com/watch?v=0U1LRU9x33o', //lien
            'miniature' => 'https://img.youtube.com/vi/0U1LRU9x33o/mqdefault.jpg', //lien 
            'latitude' => '-1.47825', 
            'longitude' => '43.48807', 
            'imgPicto' => 'Icon-Pere.png', //juste le nom
            'imgSurvol' => '30.jpg', //juste le nom
        ]);
         DB::table('contenus')->insert([
            'id'=>31,
            'titre'=>'Pont Pannecau',
            'video' => 'https://youtu.be/v9wmOWlMMNo', //lien
            'miniature' => 'https://img.youtube.com/vi/v9wmOWlMMNo/mqdefault.jpg', //lien 
            'latitude' => '-1.47449', 
            'longitude' => '43.48979',
            'imgPicto' => 'Icon-Mere.png', //juste le nom
            'imgSurvol' => '31.jpg', //juste le nom
        ]);
         DB::table('contenus')->insert([
            'id'=>32,
            'titre'=>'Dianas',
            'video' => 'https://www.youtube.com/watch?v=zTYFPlGyK7g', //lien
            'miniature' => 'https://img.youtube.com/vi/zTYFPlGyK7g/mqdefault.jpg', //lien 
            'latitude' => '-1.47488',  
            'longitude' => '43.48976',
            'imgPicto' => 'Icon-Mere.png', //juste le nom
            'imgSurvol' => '32.jpg', //juste le nom
        ]);
         DB::table('contenus')->insert([
            'id'=>34,
            'titre'=>'Animation musicale',
            'video' => 'https://www.youtube.com/watch?v=Vvdz-gEo0eE', //lien
            'miniature' => 'https://img.youtube.com/vi/Vvdz-gEo0eE/mqdefault.jpg', //lien 
            'latitude' => '-1.47317', 
            'longitude' => '43.48991', 
            'imgPicto' => 'Icon-Pere.png', //juste le nom
            'imgSurvol' => '34.jpg', //juste le nom
        ]);
         DB::table('contenus')->insert([
            'id' => 35, //unique
            'titre'=>'Animation musicale',
            'video'=>'https://www.youtube.com/watch?v=6UobC39FdF8', //lien
            'miniature' => 'https://img.youtube.com/vi/6UobC39FdF8/mqdefault.jpg', //lien 
            'latitude' => '-1.47595', 
            'longitude' => ' 43.4897', 
            'imgPicto' => 'Icon-Mere.png', //juste le nom
            'imgSurvol' => '35.jpg', //juste le nom
        ]);
         DB::table('contenus')->insert([
            'id'=>36,
            'titre'=>'Yoga des fetes',
            'video' => 'https://www.youtube.com/watch?v=pwGPxTL8Pcs', //lien
            'miniature' => 'https://img.youtube.com/vi/pwGPxTL8Pcs/mqdefault.jpg', //lien 
            'latitude' => '-1.47476', 
            'longitude' => '43.49294',
            'imgPicto' => 'Icon-Fils.png', //juste le nom
            'imgSurvol' => '36.jpg', //juste le nom
        ]);
        
         DB::table('contenus')->insert([
            'id'=>37,
            'titre'=>'Initiation à la danse Basque',
            'video' => 'https://www.youtube.com/watch?v=Vv1HemGsDA8', //lien
            'miniature' => 'https://img.youtube.com/vi/Vv1HemGsDA8/mqdefault.jpg', //lien 
            'latitude' => '-1.47476', 
            'longitude' => '43.4929',
            'imgPicto' => 'Icon-Fils.png', //juste le nom
            'imgSurvol' => '13.jpg', //juste le nom
        ]);
         DB::table('contenus')->insert([
            'id'=>38,
            'titre'=>'Arrivée de la cour',
            'video' => 'https://www.youtube.com/watch?v=fReDZjCJIJQ', //lien
            'miniature' => 'https://img.youtube.com/vi/fReDZjCJIJQ/mqdefault.jpg', //lien 
            'latitude' => '-1.47516', 
            'longitude' => '43.49301',
            'imgPicto' => 'Icon-Fille.png', //juste le nom
            'imgSurvol' => '38.jpg', //juste le nom
        ]);
         DB::table('contenus')->insert([
            'id'=>40,
            'titre'=>'Repas des anciens',
            'video' => 'https://www.youtube.com/watch?v=HXPUY20kXQw', //lien
            'miniature' => 'https://img.youtube.com/vi/HXPUY20kXQw/mqdefault.jpg', //lien 
            'latitude' => '-1.48558', 
            'longitude' => '43.48918', 
            'imgPicto' => 'Icon-Pere.png', //juste le nom
            'imgSurvol' => '40.jpg', //juste le nom
        ]);
         DB::table('contenus')->insert([
            'id'=>41,
            'titre'=>'Chant basque ',
            'video'=>'https://youtu.be/kQGBXU4Uqqk', //lien
            'miniature' => 'https://img.youtube.com/vi/kQGBXU4Uqqk/mqdefault.jpg', //lien 
            'latitude' => '-1.47747', 
            'longitude' => '43.49212',
            'imgPicto' => 'Icon-Mere.png', //juste le nom
            'imgSurvol' => '41.jpg', //juste le nom
        ]);
         DB::table('contenus')->insert([
            'id'=>42,
            'titre'=>'Bal traditionnel',
            'video' => 'https://www.youtube.com/watch?v=VOt5a21t7kI', //lien
            'miniature' => 'https://img.youtube.com/vi/VOt5a21t7kI/mqdefault.jpg', //lien 
            'latitude' => '-1.47749', 
            'longitude' => '43.49218',
            'imgPicto' => 'Icon-Pere.png', //juste le nom
            'imgSurvol' => '42.jpg', //juste le nom
        ]);
         DB::table('contenus')->insert([
            'id'=>44,
            'titre'=>'Vue sur la Nive',
            'video' => 'https://www.youtube.com/watch?v=S5kBA-LHuWI', //lien
            'miniature' => 'https://img.youtube.com/vi/S5kBA-LHuWI/mqdefault.jpg', //lien 
            'latitude' => '-1.47423', 
            'longitude' => '43.48919',
            'imgPicto' => 'Icon-Mere.png', //juste le nom
            'imgSurvol' => '44.jpg', //juste le nom
        ]);
         DB::table('contenus')->insert([
            'id'=>45,
            'titre'=>'Triath drôle 1',
            'video' => 'https://www.youtube.com/watch?v=ROzItOgV1N4', //lien
            'miniature' => 'https://img.youtube.com/vi/ROzItOgV1N4/mqdefault.jpg', //lien 
            'latitude' => '-1.47487', 
            'longitude' => '43.49304',
            'imgPicto' => 'Icon-Fille.png', //juste le nom
            'imgSurvol' => '45.jpg', //juste le nom
        ]);
         DB::table('contenus')->insert([
            'id'=>46,
            'titre'=>'Triath drôle 2',
            'video' => 'https://www.youtube.com/watch?v=1TFnsUriISE', //lien
            'miniature' => 'https://img.youtube.com/vi/1TFnsUriISE/mqdefault.jpg', //lien 
            'latitude' => '-1.4747', 
            'longitude' => '43.49273',
            'imgPicto' => 'Icon-Fille.png', //juste le nom
            'imgSurvol' => '46.jpg', //juste le nom
        ]);
         DB::table('contenus')->insert([
            'id'=>49,
            'titre'=>'Sauts en parachute',
            'miniature' => 'https://img.youtube.com/vi/KLXVdohaQjk/mqdefault.jpg', //lien 
            'video'=>'https://www.youtube.com/watch?v=KLXVdohaQjk',
            'latitude' => '-1.47363', 
            'longitude' => '43.49331',
            'imgPicto' => 'Icon-Mere.png', //juste le nom
            'imgSurvol' => '49.jpg', //juste le nom
        ]);
        
         DB::table('contenus')->insert([
            'id'=>50,
            'titre'=>'Sur la Nive',
            'video'=>'https://www.youtube.com/watch?v=sCElhs1doV4',
            'miniature' => 'https://img.youtube.com/vi/sCElhs1doV4/mqdefault.jpg', //lien 
            'latitude' => '-1.47448', 
            'longitude' => '43.49015',
            'imgPicto' => 'Icon-Pere.png', //juste le nom
            'imgSurvol' => '50.jpg', //juste le nom
        ]); 
        DB::table('contenus')->insert([
            'id'=>51,
            'titre'=>'Corrida Condomoise',
            'video' => 'https://www.youtube.com/watch?v=85bj5dDRiK0', //lien
            'miniature' => 'https://img.youtube.com/vi/85bj5dDRiK0/mqdefault.jpg', //lien 
            'latitude' => '-1.47121', 
            'longitude' => '43.48995',
            'imgPicto' => 'Icon-Pere.png', //juste le nom
            'imgSurvol' => '51.jpg', //juste le nom
        ]);
         DB::table('contenus')->insert([
            'id'=>52,
            'titre'=>'Pelote basque',
            'video' => 'https://www.youtube.com/watch?v=ZCi9dv7hJFk', //lien
            'miniature' => 'https://img.youtube.com/vi/ZCi9dv7hJFk/mqdefault.jpg', //lien 
            'latitude' => '-1.47835', 
            'longitude' => '43.48523',
            'imgPicto' => 'Icon-Pere.png', //juste le nom
            'imgSurvol' => '52.jpg', //juste le nom
        ]);
         DB::table('contenus')->insert([
            'id'=>54,
            'titre'=>'Corrida à cheval',
            'video' => 'https://www.youtube.com/watch?v=mD3bNj-gHZw', //lien
            'miniature' => 'https://img.youtube.com/vi/mD3bNj-gHZw/mqdefault.jpg', //lien 
            'latitude' => '-1.4884', 
            'longitude' => '43.49508',
            'imgPicto' => 'Icon-Pere.png', //juste le nom
            'imgSurvol' => '54.jpg', //juste le nom
        ]); 
        DB::table('contenus')->insert([
            'id'=>55,
            'titre'=>'Chant basque',
            'video' => 'https://www.youtube.com/watch?v=hMzpOIYxJME', //lien
            'miniature' => 'https://img.youtube.com/vi/hMzpOIYxJME/mqdefault.jpg', //lien 
            'latitude' => '-1.47669', 
            'longitude' => '43.49015',
            'imgPicto' => 'Icon-Pere.png', //juste le nom
            'imgSurvol' => '55.jpg', //juste le nom
        ]);
        DB::table('contenus')->insert([
            'id'=>56,
            'titre'=>'Scène de rue',
            'video' => 'https://www.youtube.com/watch?v=jhAkpgkPl6s', //lien
            'miniature' => 'https://img.youtube.com/vi/jhAkpgkPl6s/mqdefault.jpg', //lien 
            'latitude' => '-1.47607', 
            'longitude' => '43.4905',
            'imgPicto' => 'Icon-Pere.png', //juste le nom
            'imgSurvol' => '56.jpg', //juste le nom
        ]); 
        DB::table('contenus')->insert([
            'id'=>57,
            'titre'=>'Corso lumineux',
            'video' => 'https://www.youtube.com/watch?v=Oh-uSFwvCFM', //lien
            'miniature' => 'https://img.youtube.com/vi/Oh-uSFwvCFM/mqdefault.jpg', //lien 
            'latitude' => '-1.47026', 
            'longitude' => '43.49537', 
            'imgPicto' => 'Icon-Fils.png', //juste le nom
            'imgSurvol' => '57.jpg', //juste le nom
        ]);
        
         DB::table('contenus')->insert([
            'id'=>58,
            'titre'=>'Corso lumineux 2',
            'video' => 'https://www.youtube.com/watch?v=qhBLITPB5ns', //lien
            'miniature' => 'https://img.youtube.com/vi/qhBLITPB5ns/mqdefault.jpg', //lien 
            'latitude' => '-1.4751', 
            'longitude' => '43.49414',
            'imgPicto' => 'Icon-Mere.png', //juste le nom
            'imgSurvol' => '58.jpg', //juste le nom
        ]);
         DB::table('contenus')->insert([
            'id'=>59,
            'titre'=>'Scène de rue la nuit',
            'video' => 'https://www.youtube.com/watch?v=zueXodlhU3U', //lien
            'miniature' => 'https://img.youtube.com/vi/zueXodlhU3U/mqdefault.jpg', //lien 
            'latitude' => '-1.47553', 
            'longitude' => '43.48911', 
            'imgPicto' => 'Icon-Pere.png', //juste le nom
            'imgSurvol' => '59.jpg', //juste le nom
        ]);
         DB::table('contenus')->insert([
            'id'=>60,
            'titre'=>'Traversée de festayres',
            'video' => 'https://www.youtube.com/watch?v=nvDpgWx7PgY', //lien
            'miniature' => 'https://img.youtube.com/vi/nvDpgWx7PgY/mqdefault.jpg', //lien 
            'latitude' => '-1.47532', 
            'longitude' => '43.48971',
            'imgPicto' => 'Icon-Mere.png', //juste le nom
            'imgSurvol' => '60.jpg', //juste le nom
        ]);
         DB::table('contenus')->insert([
            'id'=>61,
            'titre'=>'Au trinquet',
            'video' => 'https://www.youtube.com/watch?v=_MXnB7qcqK8', //lien
            'miniature' => 'https://img.youtube.com/vi/_MXnB7qcqK8/mqdefault.jpg', //lien 
            'latitude' => '-1.47187', 
            'longitude' => '43.49001',
            'imgPicto' => 'Icon-Mere.png', //juste le nom
            'imgSurvol' => '61.jpg', //juste le nom
        ]);
         DB::table('contenus')->insert([
            'id'=>62,
            'titre'=>'Messe des bandas',
            'video' => 'https://www.youtube.com/watch?v=pg0apI5gMRQ', //lien
            'miniature' => 'https://img.youtube.com/vi/pg0apI5gMRQ/mqdefault.jpg', //lien  
            'latitude' => '-1.4708', 
            'longitude' => '43.49055',
            'imgPicto' => 'Icon-Pere.png', //juste le nom
            'imgSurvol' => '62.jpg', //juste le nom
        ]);
        
     DB::table('contenus')->insert([
            'id'=>65,
            'titre'=>'Défilé des bandas',
            'video' => 'https://www.youtube.com/watch?v=4vpw30JAjhw', //lien
            'miniature' => 'https://img.youtube.com/vi/4vpw30JAjhw/mqdefault.jpg', //lien 
            'latitude' => '-1.47668', 
            'longitude' => '43.49243',
            'imgPicto' => 'Icon-Fille.png', //juste le nom
            'imgSurvol' => '65.jpg', //juste le nom
        ]);
        
         DB::table('contenus')->insert([
            'id'=>68,
            'titre'=>'Cavalcade taurine',
            'video' => 'https://www.youtube.com/watch?v=2f101Bix-Uk', //lien
            'miniature' => 'https://img.youtube.com/vi/2f101Bix-Uk/mqdefault.jpg', //lien 
            'latitude' => '-1.4757', 
            'longitude' => '43.49339',
            'imgPicto' => 'Icon-Mere.png', //juste le nom
            'imgSurvol' => '68.jpg', //juste le nom
        ]);
        
         DB::table('contenus')->insert([
            'id'=>69,
            'titre'=>'Pont Mayou',
            'video' => 'https://www.youtube.com/watch?v=yNflJEdCskk', //lien
            'miniature' => 'https://img.youtube.com/vi/yNflJEdCskk/mqdefault.jpg', //lien 
            'latitude' => '-1.47395', 
            'longitude' => '43.49243',
            'imgPicto' => 'Icon-Mere.png', //juste le nom
            'imgSurvol' => '69.jpg', //juste le nom
        ]);
        
         DB::table('contenus')->insert([
            'id'=>71,
            'titre'=>'Ambiance de rue',
            'video' => 'https://www.youtube.com/watch?v=UsZZiVRw3T4', //lien
            'miniature' => 'https://img.youtube.com/vi/UsZZiVRw3T4/mqdefault.jpg', //lien 
            'latitude' => '-1.47628', 
            'longitude' => '43.49179', 
            'imgPicto' => 'Icon-Mere.png', //juste le nom
            'imgSurvol' => '70.jpg', //juste le nom
        ]);
        
         DB::table('contenus')->insert([
            'id'=>73,
            'titre'=>'Animation musicale',
            'video' => 'https://www.youtube.com/watch?v=PUXF52LQT4s', //lien
            'miniature' => 'https://img.youtube.com/vi/PUXF52LQT4s/mqdefault.jpg', //lien 
            'latitude' => '-1.47377', 
            'longitude' => '43.49054',
            'imgPicto' => 'Icon-Mere.png', //juste le nom
            'imgSurvol' => '12.jpg', //juste le nom
        ]);
        
         DB::table('contenus')->insert([
            'id'=>74,
            'titre'=>'Repas dans la rue',
            'video' => 'https://www.youtube.com/watch?v=yJ2_wycwuUw', //lien
            'miniature' => 'https://img.youtube.com/vi/yJ2_wycwuUw/mqdefault.jpg', //lien 
            'latitude' => '-1.47552', 
            'longitude' => '43.48951',
            'imgPicto' => 'Icon-Mere.png', //juste le nom
            'imgSurvol' => '74.jpg', //juste le nom
        ]);
        
         DB::table('contenus')->insert([
            'id'=>76,
            'titre'=>'Corrida des Fêtes',
            'video' => 'https://youtu.be/azCQWl_b_Jo', //lien
            'miniature' => 'https://img.youtube.com/vi/azCQWl_b_Jo/mqdefault.jpg', //lien 
            'latitude' => '-1.48846', 
            'longitude' => '43.49511',
            'imgPicto' => 'Icon-Mere.png', //juste le nom
            'imgSurvol' => '76.jpg', //juste le nom
        ]);
        
         DB::table('contenus')->insert([
            'id'=>77,
            'titre'=>'Concert de nuit',
            'video' => 'https://www.youtube.com/watch?v=W3bucFtH1ic', //lien
            'miniature' => 'https://img.youtube.com/vi/W3bucFtH1ic/mqdefault.jpg', //lien 
            'latitude' => '-1.47588', 
            'longitude' => '43.49097',
            'imgPicto' => 'Icon-Mere.png', //juste le nom
            'imgSurvol' => '77.jpg', //juste le nom
        ]);
        
         DB::table('contenus')->insert([
            'id'=>78,
            'titre'=>'Clôture des fêtes',
            'video' => 'https://www.youtube.com/watch?v=QHoE0YYhkGQ', //lien
            'miniature' => 'http://img.youtube.com/vi/QHoE0YYhkGQ/mqdefault.jpg', //lien 
            'latitude' => '-1.47485', 
            'longitude' => '43.49323', 
            'imgPicto' => 'Icon-Fille.png', //juste le nom
            'imgSurvol' => '78.jpg', //juste le nom
        ]);
        
         DB::table('contenus')->insert([
            'id'=>79,
            'titre'=>'Feu d artifice ',
            'video' => 'https://www.youtube.com/watch?v=MAFtvnFYYP4', //lien
            'miniature' => 'https://img.youtube.com/vi/MAFtvnFYYP4/mqdefault.jpg', //lien 
            'latitude' => '-1.47473', 
            'longitude' => '43.49341',
            'imgPicto' => 'Icon-Fille.png', //juste le nom
            'imgSurvol' => '79.jpg', //juste le nom
        ]);
        
    }
}