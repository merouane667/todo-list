<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/','tasksController@index');

Route::get('/create','tasksController@create');

Route::post('/create','tasksController@store');

Route::get('/edit/{id}','tasksController@edit');

Route::post('/edit/{id}','tasksController@update');

Route::get('/delete/{id}','tasksController@destroy');

Route::get('/completed/{id}','tasksController@completed');




