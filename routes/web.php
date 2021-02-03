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

Route::get('/', 'SongController@all')->name('home');

Route::get('/add', function () {
    return view('add');
})->name('add');

Route::get('/reports', function () {
    return view('reports');
})->name('reports');

Route::post('/add/submit', 'SongController@send')->name('send');

Route::get('/more/{id}', 'SongController@more')->name('more');

Route::get('/change/{id}', 'SongController@change')->name('change');

Route::post('/changeSubmit/{id}', 'SongController@changeSubmit')->name('changeSubmit');
