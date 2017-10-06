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
Route::get('/character/{character}/editCharacter', 'CharacterViewController@editCharacter');

Route::post('/character/store', 'CharacterController@store');
Route::post('/character/{character}/addTalents', 'CharacterController@addTalents');
Route::post('/character/{character}/addFightingtalents', 'CharacterController@addFightingtalents');
Route::post('/character/{character}/addLanguages', 'CharacterController@addLanguages');
Route::post('/character/{character}/addLetterings', 'CharacterController@addLetterings');


Route::get('/character/{character}/show', 'CharacterViewController@single');

Route::post('/character/{character}/energy', 'CharacterController@updatEenergy');

//Route::get('/character/{character}/diary', 'CharacterViewController@diary');

Route::post('api/fields', 'DataController@fields');
Route::get('/api/Inventory/{inventory}/Items', 'InventoryController@items');
Route::post('api/Inventory/{inventory}/delete', 'InventoryController@delete');
Route::post('api/Inventory/{inventory}/addItem', 'InventoryController@addItem');
Route::get('/api/{model}', 'DataController@index');
Route::post('/api/{model}/store', 'DataController@store');
Route::post('api/{model}/{id}/update', 'DataController@update');
Route::post('api/{model}/{id}/delete', 'DataController@destroy');

Auth::routes();
