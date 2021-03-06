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
// rotta della home
Route::get('/', function () {
    return view('home');
})->name('home');

// rotta della viws con la lista di tutti i movies
//grazie al controlle creato col terminale sposto la logica e le funzioni da route a 'app/https/controller/nome controller dato'
Route::get('/movies', 'MovieController@index')->name('movies') ;

// creo una route per la singola show 
Route::get('/movies/{id}', 'MovieController@show')->name('movie') ;