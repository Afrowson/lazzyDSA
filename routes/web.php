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

//Route::get('/character/{character}/diary', 'CharacterViewController@diary');

Route::post('/api/fields', 'DataController@fields');

Route::post('/api/Character/create', 'CharacterController@store');
Route::post('/api/Character/{character}/updatetalents', 'CharacterController@updateTalents');
Route::post('/api/Character/{character}/updatefightingtalents', 'CharacterController@updateFightingtalents');

Route::post('/api/Character/{character}/addlanguage', 'CharacterController@addLanguage');
Route::post('/api/Character/{character}/addlettering', 'CharacterController@addLettering');
Route::post('/api/Character/{character}/addbenefice', 'CharacterController@addBenefice');
Route::post('/api/Character/{character}/addhandicap', 'CharacterController@addHandicap');
Route::post('/api/Character/{character}/addmagictrick', 'CharacterController@addMagictrick');
Route::post('/api/Character/{character}/addspecialtalent', 'CharacterController@addSpecialTalent');
Route::post('/api/Character/{character}/addspecialfightingtalent', 'CharacterController@addSpecialFightingtalent');
Route::post('/api/Character/{character}/addspecialmagictalent', 'CharacterController@addSpecialMagictalent');
Route::post('/api/Character/{character}/addshield', 'CharacterController@addShield');
Route::post('/api/Character/{character}/addarmor', 'CharacterController@addArmor');
Route::post('/api/Character/{character}/addweapon', 'CharacterController@addWeapon');
Route::post('/api/Character/{character}/addrangeweapon', 'CharacterController@addRangeweapon');

Route::post('/api/Character/{character}/removelanguage', 'CharacterController@removeLanguage');
Route::post('/api/Character/{character}/removelettering', 'CharacterController@removeLettering');
Route::post('/api/Character/{character}/removebenefice', 'CharacterController@removeBenefice');
Route::post('/api/Character/{character}/removehandicap', 'CharacterController@removeHandicap');
Route::post('/api/Character/{character}/removemagictrick', 'CharacterController@removeMagictrick');
Route::post('/api/Character/{character}/removespecialtalent', 'CharacterController@removeSpecialTalent');
Route::post('/api/Character/{character}/removespecialfightingtalent', 'CharacterController@removeSpecialFightingtalent');
Route::post('/api/Character/{character}/removespecialmagictalent', 'CharacterController@removeSpecialMagictalent');
Route::post('/api/Character/{character}/removeshield', 'CharacterController@removeShield');
Route::post('/api/Character/{character}/removearmor', 'CharacterController@removeArmor');
Route::post('/api/Character/{character}/removeweapon', 'CharacterController@removeWeapon');
Route::post('/api/Character/{character}/removerangeweapon', 'CharacterController@removeRangeweapon');


Route::get('/api/Inventory/{inventory}/Items', 'InventoryController@items');
Route::post('/api/Inventory/{inventory}/delete', 'InventoryController@delete');
Route::post('/api/Inventory/{inventory}/addItem', 'InventoryController@addItem');

Route::get('/api/{model}', 'DataController@index');
Route::post('/api/{model}/create', 'DataController@store');
Route::post('/api/{model}/{id}/update', 'DataController@update');
Route::post('/api/{model}/{id}/delete', 'DataController@destroy');

Auth::routes();
