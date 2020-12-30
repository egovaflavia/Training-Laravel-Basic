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

Route::get('/pegawai', 'PegawaiController@index')->name('pegawai');

Route::get('/pegawai/cetak', 'PegawaiController@cetak');
Route::get('/pegawai/export', 'PegawaiController@export');

Route::get('/pegawai/tambah', 'PegawaiController@tambah');
Route::post('/pegawai/store', 'PegawaiController@store');
Route::get('/pegawai/edit/{id}', 'PegawaiController@edit');
Route::put('/pegawai/update/{id}', 'PegawaiController@update');
Route::get('/pegawai/hapus/{id}', 'PegawaiController@delete');

Route::get('/guru', 'GuruController@index');
Route::get('/guru/hapus/{id}', 'GuruController@hapus');
Route::get('/guru/trash', 'GuruController@trash');

Route::get('/pengguna', 'PenggunaController@index');

Route::get('/article', 'WebController@index');

Route::get('/anggota', 'AnggotaController@index');

Route::get('/session/tampil', 'SessionController@tampil');
Route::get('/session/buat', 'SessionController@buat');
Route::get('/session/hapus', 'SessionController@hapus');

Route::get('/flash', 'FlashController@index');
Route::get('/flash/success', 'FlashController@success');
Route::get('/flash/info', 'FlashController@info');
Route::get('/flash/danger', 'FlashController@danger');


Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/upload', 'UploadController@upload');
Route::post('/proses', 'UploadController@proses');

Route::get('/test/{nama}', 'TestController@index');
