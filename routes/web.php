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


use App\Character;

Route::get('/', function () {
    return view('home');
});

Route::get('/characters', function () {

    $characters =  Character::all();

    return view('characters',compact('characters'));
});

Route::get('/character/{id}', function($id){
    $character = Character::find($id);
    return view('character',compact('character'));

});


