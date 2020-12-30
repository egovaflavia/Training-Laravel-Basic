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

Route::get('halo', function () {
    return "Lorem ipsum dolor sit amet consectetur adipisicing elit. Non ex repudiandae at placeat, molestiae cum amet explicabo dicta, magnam culpa quidem! Dolorem quisquam labore iste, expedita molestiae quibusdam quas esse.";
});

Route::get('blog', function () {
    return view('blog');
});
