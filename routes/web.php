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

// Route::get('/', 'UserController@index');


Route::get('/home', 'DashboardController@index')->name('home');


Route::get('/kategori', 'KategoriController@index')->name('kategori');
Route::post('/kategori', 'KategoriController@store')->name('kategori.store');
Route::post('/kategori/edit', 'KategoriController@edit')->name('kategori.edit');
Route::get('/kategori/delete/{id}', 'KategoriController@destroy')->name('kategori.destroy');
Route::get('/get/kategori/{id}', 'KategoriController@liatfoto')->name('kategori.displayImage');

Route::get('/subkategori', 'SubKategoriController@index')->name('subkategori');
Route::post('/subkategori', 'SubKategoriController@store')->name('subkategori.store');
Route::post('/subkategori/edit', 'SubKategoriController@edit')->name('subkategori.edit');
Route::post('/subkategori/fromkategori', 'SubKategoriController@fromkategori')->name('subkategori.fromkategori');
Route::get('/subkategori/delete/{id}', 'SubKategoriController@destroy')->name('subkategori.destroy');

Route::get('/barang', 'BarangController@index')->name('barang');
Route::post('/barang', 'BarangController@store')->name('barang.store');
Route::post('/barang/edit', 'BarangController@edit')->name('barang.edit');
Route::get('/barang/delete/{id}', 'BarangController@index')->name('barang.destroy');
Route::get('/get/barang/{id}', 'BarangController@liatfoto')->name('barang.displayImage');
Route::get('/get/barangdetail/{id}', 'BarangController@liatfotodetail')->name('barangdetail.displayImage');

Route::get('/transaksi', 'TransaksiController@index')->name('transaksi');