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
Route::get('/index', function () {
    return view('index');
});
Route::get('/halamandua', function () {
    return view('halamandua');
});
Route::get('/halamantiga', function () {
    return view('halamantiga');
});
Route::get('/mahasiswa', function () {
    return view('mahasiswa');
});
Route::get('/user', function () {
    return view('user');
});
Route::get('/file', function () {
    return view('file');
});
Route::get('/barang', function () {
    return view('barang');
});

Route::get('halaman/contoh', 'Contoh@tambah');
Route::resource('halaman','Contoh');

Route::resource('mahasiswa','Mahasiswa');
Route::resource('user','User');
Route::resource('file','File');
Route::resource('barang','Barang');
