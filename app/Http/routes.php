<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/parcours-{n}', 'ParcoursController@parcours')
    ->where('n', '(homme|femme|garcon|fille)');

Route::get('/Carte-{n}','MapController@index')
    ->where('n','(homme|femme|garcon|fille)');

Route::get('/parcours-{n}/{k}', 'ParcoursController@parcoursChoisi')
    ->where('n', '(homme|femme|garcon|fille)')
    ->where('k', '(Festayre|Famille|Enfant|Carte)');
    
Route::get('/petitLeon', function () {
    return view('petitLeon');
});

Route::get('/credits', function () {
    return view('mentionsLegales');
});

Route::auth();

Route::get('/home', 'HomeController@index');

Route::group(['middleware' => 'auth'], function () {
    Route::group(['prefix' => 'admin'], function () {
        Route::group(['namespace' => 'Admin'], function () {
            Route::get('/', 'AdminController@index')->name('dashboard');
            Route::resource('map', 'MapAController');
            Route::resource('parcours','ParcoursAController');
            Route::resource('festayre', 'FestayreController');
            Route::resource('famille', 'FamilleController');
            Route::resource('enfant', 'EnfantController');
        });
    });
});

Route::get('/Cartev2-{n}','Map2Controller@index')
    ->where('n','(homme|femme|garcon|fille)');
    
Route::get('/Cartev2-{n}/{p}-{k}','Map2Controller@indexID')
    ->where('n','(homme|femme|garcon|fille)')
    ->where('p', '(Festayre|Famille|Enfant)');