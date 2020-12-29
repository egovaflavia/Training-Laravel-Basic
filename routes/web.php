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

Route::get('/', function () {
    return view('welcome');
});

Route::get('injek', 'PegawaiController@injek');
Route::get('/pegawai', 'PegawaiController@index');
Route::get('/pegawai/tambah', 'PegawaiController@tambah');
Route::post('/pegawai/tambah/proses', 'PegawaiController@store');
Route::get('/pegawai/{id}/edit', 'PegawaiController@edit');
Route::get('/pegawai/{id}/delete', 'PegawaiController@delete');
Route::post('/pegawai/edit/proses', 'PegawaiController@update');
Route::get('/pegawai/cari', 'PegawaiController@cari');
