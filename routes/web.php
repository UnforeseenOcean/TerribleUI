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

Route::get('/', function () {
  return view('home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//routes

Route::get('garbage', 'GarbageController@index');
Route::get('garbage/create', 'GarbageController@create');
Route::get('garbage/{garbage}/edit', 'GarbageController@edit');
Route::post('garbage', 'GarbageController@store');
Route::patch('garbage/{garbage}', 'GarbageController@update');
