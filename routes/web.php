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

Route::get('/login', 'HalamanController@login')->middleware('guest')->name('login');

Route::post('/ceklogin', 'HalamanController@ceklogin')->middleware('guest');

Route::get('/dashboard', 'HalamanController@dashboard')->middleware('auth');

Route::get('/logout', 'HalamanController@logout')->middleware('auth');

Route::get('/user', 'UserController@index')->middleware('auth');
Route::get('/user/add', 'UserController@tambah')->middleware('auth');
Route::post('/user/insert', 'UserController@insert')->middleware('auth');
Route::get('/user/edit/{id}', 'UserController@edit')->middleware('auth');
Route::post('/user/update', 'UserController@update')->middleware('auth');
Route::get('/user/delete/{id}', 'UserController@delete')->middleware('auth');

Route::get('/barang', 'BarangController@index')->middleware('auth');
Route::get('/barang/add', 'BarangController@tambah')->middleware('auth');
Route::post('/barang/insert', 'BarangController@insert')->middleware('auth');
Route::get('/barang/edit/{id}', 'BarangController@edit')->middleware('auth');
Route::post('/barang/update', 'BarangController@update')->middleware('auth');
Route::get('/barang/delete/{id}', 'BarangController@delete')->middleware('auth');

Route::get('/laporan', 'LaporanController@index')->middleware('auth');
Route::get('/laporan/print', 'LaporanController@print')->middleware('auth');
