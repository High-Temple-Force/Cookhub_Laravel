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

# Input view
Route::get('request/', [
    'uses' => 'RequController@getIndex',
    'as' => 'request.index'
]);

# Confirm view
Route::post('request/confirm', [
    'uses' => 'RequController@confirm',
    'as' => 'request.confirm'
]);
