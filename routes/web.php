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


Route::get('/character/create', 'CharacterViewController@create');

Route::post('/character/store', 'CharacterController@store');

Route::get('/character/{character}/addTalents', 'CharacterViewController@addTalents')->name('addTalents');

Route::post('/character/{character}/addTalents', 'CharacterController@addTalents');

Route::get('/character/{character}/addFightingtalents', 'CharacterViewController@addFightingtalents')->name('addFightingtalents');

Route::post('/character/{character}/addFightingtalents', 'CharacterController@addFightingtalents');

Route::get('/character/{character}/addLanguages', 'CharacterViewController@addLanguages')->name('addLanguages');






Route::get('/character/{character}', 'CharacterViewController@single');

Route::get('/character/{character}/diary', 'CharacterViewController@diary');

Route::post('/character/{character}/energy', 'CharacterController@updatEenergy');


Route::get('/database', 'SiteController@database');

Route::get('/database/table', 'SiteController@database');

Route::get('/api/{model}', 'DataController@index');

Route::get('/database/{model}/{id}/edit', 'DataController@edit');

Route::post('/database/{model}/{id}/update', 'DataController@update');

Route::get('/database/{model}/create', 'DataController@store');

Route::get('/database/{model}/{id}/delete', 'DataController@destroy');

Auth::routes();
