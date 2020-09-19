<?php

use App\Http\Controllers\CharacterController;
use App\Http\Controllers\CharacterViewController;
use App\Http\Controllers\SiteController;

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

Route::get('/index', [SiteController::class,'index']);
Route::get('/database', [SiteController::class,'database']);

Route::get('/character/create', [CharacterViewController::class,'create']);
Route::get('/character/{character}/edit', [CharacterViewController::class,'editCharacter']);


Route::get('/character/{character}/show', [CharacterViewController::class,'single']);
Route::post('/character/{character}/energy', [CharacterController::class,'updatEenergy']);

Route::post('/fail/Character/create', [CharacterController::class,'store']);

//Route::get('/character/{character}/diary', 'CharacterViewController@diary');

Auth::routes();
