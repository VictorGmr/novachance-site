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


Auth::routes();

Route::get('/', 'HomeController@home')->name('home');
Route::get('/home', 'HomeController@home')->name('home');
Route::get('/sobre', 'HomeController@sobre')->name('sobre');
Route::get('/discipulado', 'HomeController@discipulado')->name('discipulado');
Route::get('/contato', 'HomeController@contato')->name('contato');


Route::get('/ncon', 'PostController@index')->name('ncon');
Route::get('/ncon/create', 'PostController@create')->name('ncon/create');
Route::post('/ncon/store', 'PostController@store')->name('ncon/store');

