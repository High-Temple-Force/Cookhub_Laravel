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



Route::get('student/list','StudentController@getIndex');



Route::get('foo/foo1', 'FooController@foo1');

Route::get('foo/foo2', 'FooController@foo2');
Route::get('foo/foo3', 'FooController@foo3');
Route::get('foo/foo4', 'FooController@foo4');
Route::auth();

Route::get('/home', 'HomeController@index');

Route::resource('user', 'UserController');