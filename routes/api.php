<?php

use App\Http\Controllers\CharacterController;
use App\Http\Controllers\DataController;
use App\Http\Controllers\GameItemController;
use App\Http\Controllers\InventoryController;
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

Route::post('Character/{character}/updatetalents', [CharacterController::class,'updateTalents']);
Route::post('Character/{character}/updatefightingtalents', [CharacterController::class,'updateFightingtalents']);
Route::post('Character/{character}/updatepurse', [CharacterController::class,'updatePurse']);

Route::post('Character/{character}/addlanguage', [CharacterController::class,'addLanguage']);
Route::post('Character/{character}/addlettering', [CharacterController::class,'addLettering']);
Route::post('Character/{character}/addbenefice', [CharacterController::class,'addBenefice']);
Route::post('Character/{character}/addhandicap', [CharacterController::class,'addHandicap']);
Route::post('Character/{character}/addmagictrick', [CharacterController::class,'addMagictrick']);
Route::post('Character/{character}/addspecialtalent', [CharacterController::class,'addSpecialTalent']);
Route::post('Character/{character}/addspecialfightingtalent', [CharacterController::class,'addSpecialFightingtalent']);
Route::post('Character/{character}/addspecialmagictalent', [CharacterController::class,'addSpecialMagictalent']);
Route::post('Character/{character}/addshield', [CharacterController::class,'addShield']);
Route::post('Character/{character}/addarmor', [CharacterController::class,'addArmor']);
Route::post('Character/{character}/addweapon', [CharacterController::class,'addWeapon']);
Route::post('Character/{character}/addrangeweapon', [CharacterController::class,'addRangeweapon']);
Route::post('Character/{character}/addpurse', [CharacterController::class,'addPurse']);

Route::post('Character/{character}/removelanguage', [CharacterController::class,'removeLanguage']);
Route::post('Character/{character}/removelettering', [CharacterController::class,'removeLettering']);
Route::post('Character/{character}/removebenefice', [CharacterController::class,'removeBenefice']);
Route::post('Character/{character}/removehandicap', [CharacterController::class,'removeHandicap']);
Route::post('Character/{character}/removemagictrick', [CharacterController::class,'removeMagictrick']);
Route::post('Character/{character}/removespecialtalent', [CharacterController::class,'removeSpecialTalent']);
Route::post('Character/{character}/removespecialfightingtalent', [CharacterController::class,'removeSpecialFightingtalent']);
Route::post('Character/{character}/removespecialmagictalent', [CharacterController::class,'removeSpecialMagictalent']);
Route::post('Character/{character}/removeshield', [CharacterController::class,'removeShield']);
Route::post('Character/{character}/removearmor', [CharacterController::class,'removeArmor']);
Route::post('Character/{character}/removeweapon', [CharacterController::class,'removeWeapon']);
Route::post('Character/{character}/removerangeweapon', [CharacterController::class,'removeRangeweapon']);
Route::post('Character/{character}/removepurse', [CharacterController::class,'removePurse']);


Route::get('Inventory/{inventory}/items', [InventoryController::class,'items']);
Route::post('Inventory/{inventory}/delete', [InventoryController::class,'delete']);

Route::post('GameItem/create', [GameItemController::class,'store']);
Route::post('GameItem/{gameItem}/update', [GameItemController::class,'update']);
Route::post('GameItem/{gameItem}/delete', [GameItemController::class,'destroy']);

Route::get('{model}', [DataController::class,'index']);
Route::post('{model}/create', [DataController::class,'store']);
Route::post('{model}/{id}/update', [DataController::class,'update']);
Route::post('{model}/{id}/delete', [DataController::class,'destroy']);
