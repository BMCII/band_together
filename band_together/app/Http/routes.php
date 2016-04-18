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

Route::get('/instruments', function () {


    return view('instruments');
});



/**
 * Add New Instrument
 */
Route::post('/instrument', function (Request $request) {
    $validator = Validator::make($request->all(), [
        'name' => 'required|max:255',
    ]);

    if ($validator->fails()) {
        return redirect('/')
            ->withInput()
            ->withErrors($validator);
    }

    $instrument = new \App\Instrument();
    $instrument->name = $request->name;
    $instrument->save();

    return redirect('/');
});

/**
 * Delete Task
 */
Route::delete('/instrument/{instrument}', function (\App\Instrument $task) {
    $task->delete();

    return redirect('/');
});