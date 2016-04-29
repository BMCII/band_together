<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('/home', 'HomeController@index');

Route::get('players', 'PlayersController@index');

Route::get('players/{player}', 'PlayersController@show');

Route::post('players/{player}', 'NotesController@store');

Route::delete('/notes/{note}', function (App\Note $note) {
    $note->delete();

    return back() ;
});
Route::post('players/{player}', 'PlayerController@store');
//Route::post('players/{user}/players', 'PlayerController@store');

//Route::delete('/players/{player}', function (App\Player $player) {
//    $player->delete();
//
//    return back() ;
//}