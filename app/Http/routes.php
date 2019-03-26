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
    'uses' => 'InsertController@getIndex',
    'as' => 'insert.index'
]);

# Confirm view
Route::post('request/confirm', [
    'uses' => 'InsertController@confirm',
    'as' => 'insert.confirm'
]);


# finisi
Route::post('insert/finish', [
    'uses' => 'InsertController@finish',
    'as' => 'insert.finish'
]);


Route::get('student/list','StudentController@getIndex');

Route::get('foo', function () {
    return 'Foll!';
});


Route::get('foo/foo1', 'FooController@foo1');

Route::get('foo/foo2', 'FooController@foo2');
Route::get('foo/foo3', 'FooController@foo3');
Route::get('foo/foo4', 'FooController@foo4');
Route::auth();

Route::get('/home', 'HomeController@index');

Route::resource('user', 'UserController');
