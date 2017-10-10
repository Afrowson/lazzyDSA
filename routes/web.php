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
Route::get('/database','SiteController@database');

Route::get('/character/create', 'CharacterViewController@create');
Route::get('/character/{character}/edit', 'CharacterViewController@editCharacter');

Route::post('/character/{character}/addLanguages', 'CharacterController@addLanguage');
Route::post('/character/{character}/addLetterings', 'CharacterController@addLettering');


Route::get('/character/{character}/show', 'CharacterViewController@single');
Route::post('/character/{character}/energy', 'CharacterController@updatEenergy');

//Route::get('/character/{character}/diary', 'CharacterViewController@diary');

Route::post('/api/fields', 'DataController@fields');

Route::post('/api/Character/create', 'CharacterController@store');
Route::post('/api/Character/{character}/updatetalents', 'CharacterController@updateTalents');
Route::post('/api/Character/{character}/updatefightingtalents', 'CharacterController@addFightingtalents');

Route::get('/api/Inventory/{inventory}/Items', 'InventoryController@items');
Route::post('/api/Inventory/{inventory}/delete', 'InventoryController@delete');
Route::post('/api/Inventory/{inventory}/addItem', 'InventoryController@addItem');

Route::get('/api/{model}', 'DataController@index');
Route::post('/api/{model}/create', 'DataController@store');
Route::post('/api/{model}/{id}/update', 'DataController@update');
Route::post('/api/{model}/{id}/delete', 'DataController@destroy');

Auth::routes();
