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
Route::get('/home', 'SiteController@home');

Route::get('/characters', 'CharacterViewController@index');

Route::get('/character/{character}', 'CharacterViewController@single');

Route::get('/character/{character}/diary', 'CharacterViewController@diary');

Route::post('/character/{character}/energy', 'CharacterController@updateenergy');

Route::get('/database', 'SiteController@database');

Route::get('/database/table', 'SiteController@database');

Route::get('/database/table/{model}/{id}', 'DataController@edit');

Route::get('/database/table/{model}/create', 'Sitecontroller@createmodel');

Route::get('/database/table/{model}/{id}/delete', 'Sitecontroller@deletemodel');
