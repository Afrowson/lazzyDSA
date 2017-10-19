<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('fields', 'DataController@fields');

Route::post('Character/create', 'CharacterController@store');
Route::post('Character/{character}/updatetalents', 'CharacterController@updateTalents');
Route::post('Character/{character}/updatefightingtalents', 'CharacterController@updateFightingtalents');
Route::post('Character/{character}/updatepurse', 'CharacterController@updatePurse');

Route::post('Character/{character}/addlanguage', 'CharacterController@addLanguage');
Route::post('Character/{character}/addlettering', 'CharacterController@addLettering');
Route::post('Character/{character}/addbenefice', 'CharacterController@addBenefice');
Route::post('Character/{character}/addhandicap', 'CharacterController@addHandicap');
Route::post('Character/{character}/addmagictrick', 'CharacterController@addMagictrick');
Route::post('Character/{character}/addspecialtalent', 'CharacterController@addSpecialTalent');
Route::post('Character/{character}/addspecialfightingtalent', 'CharacterController@addSpecialFightingtalent');
Route::post('Character/{character}/addspecialmagictalent', 'CharacterController@addSpecialMagictalent');
Route::post('Character/{character}/addshield', 'CharacterController@addShield');
Route::post('Character/{character}/addarmor', 'CharacterController@addArmor');
Route::post('Character/{character}/addweapon', 'CharacterController@addWeapon');
Route::post('Character/{character}/addrangeweapon', 'CharacterController@addRangeweapon');
Route::post('Character/{character}/addpurse', 'CharacterController@addPurse');

Route::post('Character/{character}/removelanguage', 'CharacterController@removeLanguage');
Route::post('Character/{character}/removelettering', 'CharacterController@removeLettering');
Route::post('Character/{character}/removebenefice', 'CharacterController@removeBenefice');
Route::post('Character/{character}/removehandicap', 'CharacterController@removeHandicap');
Route::post('Character/{character}/removemagictrick', 'CharacterController@removeMagictrick');
Route::post('Character/{character}/removespecialtalent', 'CharacterController@removeSpecialTalent');
Route::post('Character/{character}/removespecialfightingtalent', 'CharacterController@removeSpecialFightingtalent');
Route::post('Character/{character}/removespecialmagictalent', 'CharacterController@removeSpecialMagictalent');
Route::post('Character/{character}/removeshield', 'CharacterController@removeShield');
Route::post('Character/{character}/removearmor', 'CharacterController@removeArmor');
Route::post('Character/{character}/removeweapon', 'CharacterController@removeWeapon');
Route::post('Character/{character}/removerangeweapon', 'CharacterController@removeRangeweapon');
Route::post('Character/{character}/removepurse', 'CharacterController@removePurse');


Route::get('Inventory/{inventory}/Items', 'InventoryController@items');
Route::post('Inventory/{inventory}/delete', 'InventoryController@delete');
Route::post('Inventory/{inventory}/addItem', 'InventoryController@addItem');

Route::get('{model}', 'DataController@index');
Route::post('{model}/create', 'DataController@store');
Route::post('{model}/{id}/update', 'DataController@update');
Route::post('{model}/{id}/delete', 'DataController@destroy');
