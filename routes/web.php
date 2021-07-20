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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'DashboardController@index')->name('home');


Route::get('/kategori', 'KategoriController@index')->name('kategori');
Route::post('/kategori', 'KategoriController@store')->name('kategori.store');
Route::post('/kategori/edit', 'KategoriController@edit')->name('kategori.edit');
Route::get('/kategori/delete/{id}', 'KategoriController@destroy')->name('kategori.destroy');
