<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/
Route::get('/', 'FrontController@index');

Route::get('cardiologos', 'FrontController@cardiologos');

Route::get('pediatras', 'FrontController@pediatras');

Route::get('ginecologos', 'FrontController@ginecologos');

Route::get('neurologos', 'FrontController@neurologos');

Route::get('nefrologos', 'FrontController@nefrologos');