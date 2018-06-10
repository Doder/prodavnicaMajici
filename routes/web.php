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

use App\Proizvod;

Route::get('/', 'ProizvodiController@index');

Route::get('/majice/create', 'ProizvodiController@create')->middleware('auth');

Route::post('/majice/{majica}/delete', 'ProizvodiController@destroy')->middleware('auth');

Route::get('/majice/{majica}', 'ProizvodiController@show');

Route::post('/majice', 'ProizvodiController@store')->middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/korpa', 'KorpaController@show')->middleware('auth');

Route::post('/korpa/{proizvod}', 'KorpaController@create')->middleware('auth');


