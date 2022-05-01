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

Route::get('/','UserController@login')->name('login.page');
Route::post('/auth','UserController@auth')->name('auth.user');

Route::get('/contatos', 'ContatosController@index');
Route::get('/contatos/create', 'ContatosController@create');
Route::post('/contatos', 'ContatosController@store');
Route::get('/contatos/{id}', 'ContatosController@show');
Route::get('/contatos/{id}/edit', 'ContatosController@edit');
Route::put('/contatos/{id}', 'ContatosController@update');
Route::delete('/contatos/{id}', 'ContatosController@destroy');
