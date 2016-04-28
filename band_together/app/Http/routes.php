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


//== Link User Home ==//
Route::get('/home', 'HomeController@index');


//== List Players ==//
Route::get('players', 'PlayersController@index');

//== Show Player ==//
Route::get('players/{player}', 'PlayersController@show');

//== Add Note ==//
Route::post('players/{player}', 'NotesController@store');

//== Delete Note ==//
Route::delete('/notes/{note}', function (App\Note $note) {
    $note->delete();
    return back() ;
});

//== Create Player ==//
Route::post('{user}/player', 'PlayersController@store');

Route::get('{user}/players', 'PlayersController@view');

route::get('/home', 'HomeController@view');


Route::get('/redirect', 'SocialAuthController@redirect');
Route::get('/callback', 'SocialAuthController@callback');



//Route::post('players/{user}/players', 'PlayerController@store');

//Route::delete('/players/{player}', function (App\Player $player) {
//    $player->delete();
//
//    return back() ;
//}