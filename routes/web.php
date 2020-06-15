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
Route::post('/home/inscrever-se', 'HomeController@storeNewsletter')->name('inscrever-se');
Route::get('/sobre', 'HomeController@sobre')->name('sobre');
Route::get('/aovivo', 'LinkController@index')->name('aovivo');


Route::get('/ncnews', 'PostController@index')->name('ncnews');
Route::get('/ncnews/create', 'PostController@create')->name('ncnews/create')->middleware('auth');
Route::post('/ncnews/store', 'PostController@store')->name('ncnews/store')->middleware('auth');
Route::get('/ncnews/edit/{post}', 'PostController@edit')->name('ncnews/edit')->middleware('auth');
Route::put('/ncnews/{post}', 'PostController@update')->name('ncnews/update')->middleware('auth');
Route::delete('/ncnews/{post}', 'PostController@destroy')->name('ncnews/delete')->middleware('auth');

Route::get('/ncnews/categoria/{category}', 'PostController@showCategory');

Route::get('/aovivo/adicionar-live', 'LinkController@adicionarLive')->middleware('auth');
