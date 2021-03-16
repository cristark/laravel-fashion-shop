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

// Rotta homepage
Route::get('/', 'MainController@index')->name('homepage');

// Rotta pagina prodotti
Route::get('/prodotti', 'MainController@prodotti')->name('pag-prodotti');

// Rotta pagina contatti
Route::get('/contatti', 'MainController@contatti')->name('pag-contatti');
