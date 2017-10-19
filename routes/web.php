<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    return view('home');
});

Route::get('/index', 'SiteController@index');
Route::get('/database', 'SiteController@database');

Route::get('/character/create', 'CharacterViewController@create');
Route::get('/character/{character}/edit', 'CharacterViewController@editCharacter');


Route::get('/character/{character}/show', 'CharacterViewController@single');
Route::post('/character/{character}/energy', 'CharacterController@updatEenergy');

Route::post('/fail/Character/create', 'CharacterController@store');

//Route::get('/character/{character}/diary', 'CharacterViewController@diary');

Auth::routes();
