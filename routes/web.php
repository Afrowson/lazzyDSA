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

Route::get('/character/{character}/editCharacter', 'CharacterViewController@editCharacter')->name('editCharacter');

Route::get('/character/{character}/addTalents', 'CharacterViewController@addTalents')->name('addTalents');

Route::get('/character/{character}/addFightingtalents', 'CharacterViewController@addFightingtalents')->name('addFightingtalents');


Route::post('/character/{character}/addTalents', 'CharacterController@addTalents');
Route::post('/character/{character}/addFightingtalents', 'CharacterController@addFightingtalents');
Route::post('/character/{character}/addLanguages', 'CharacterController@addLanguages');
Route::post('/character/{character}/addLetterings', 'CharacterController@addLetterings');


Route::get('/character/{character}/show', 'CharacterViewController@single');

Route::get('/character/{character}/diary', 'CharacterViewController@diary');

Route::post('/character/{character}/energy', 'CharacterController@updatEenergy');


Route::get('/database', 'SiteController@database');

Route::get('/database/table', 'SiteController@database');

Route::get('/database/{model}/{id}/edit', 'DataController@edit');

Route::post('/database/{model}/{id}/update', 'DataController@update');

Route::get('/database/{model}/create', 'DataController@store');

Route::get('/database/{model}/{id}/delete', 'DataController@destroy');

//Route::get('/api/character/{character}/{model}', );

Route::get('/api/Inventory/{inventory}/Items', 'InventoryController@items');
Route::post('api/Inventory/{inventory}/delete', 'InventoryController@delete');
Route::post('api/Inventory/{inventory}/addItem/{item}', 'InventoryController@addItem');
Route::get('/api/{model}', 'DataController@index');
Route::post('/api/{model}/store', 'DataController@store');

Auth::routes();
