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
    return view('welcome');
});

Route::get('/chart', function () {
    return view('chart');
});

Route::resource('learn','materialsController');

Route::resource('cards','cardsController');




Auth::routes();

Route::resource('complain','complainController');

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/complain/{complain}/comments','commentController@store');

