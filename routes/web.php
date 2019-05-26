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
    return "Halo, selamat datang di tutorial laravel";
});

// Route Blog
Route::get('blog', 'BlogController@home');
Route::get('blog/tentang', 'BlogController@tentang');
Route::get('blog/kontak', 'BlogController@kontak');

Route::get('dosen', 'DosenController@index');

// Route CRUD
Route::get('pegawai', 'PegawaiController@index');
Route::get('pegawai/tambah', 'PegawaiController@tambah');
Route::post('pegawai/store', 'PegawaiController@store');

Route::get('formulir', 'PegawaiController@formulir');

Route::post('formulir/proses', 'PegawaiController@proses');
