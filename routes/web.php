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

Route::get('/majice/create', 'ProizvodiController@create');

Route::get('/majice/{majica}', 'ProizvodiController@show');

Route::get('/majice_sve', 'ProizvodiController@index');

Route::post('/majice', 'ProizvodiController@store');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
