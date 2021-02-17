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
    return view('index');
});

Route::get('/ceger', function () {
    return view('ceger');
});

Route::get('/alfad', function () {
    return view('alfad');
});


Route::get('/artha', function () {
    return view('artha');
});


Route::get('/ongkir', function () {
    return view('ongkir');
});

Route::get('halo', function () {
	return "Halo, Selamat datang di tutorial laravel www.malasngoding.com";
});

/*Route::get('blog', function () {
	return view('blog');
});*/

Route::get('dosen', 'DosenController@index');
//Route::get('/pegawai/{nama}', 'PegawaiController@index');

Route::get('/formulir', 'PegawaiController@formulir');
Route::post('/formulir/proses', 'PegawaiController@proses');
Route::get('/ceger','PegawaiController@ceger');
Route::get('/alfad','PegawaiController@alfad');
Route::get('/blog', 'BlogController@home');
Route::get('/blog/tentang', 'BlogController@tentang');
Route::get('/blog/kontak', 'BlogController@kontak');	
Route::get('/pegawai','PegawaiController@index');
Route::get('/arthayando/tambah','PegawaiController@tambah');
Route::post('/arthayando/store','PegawaiController@store');
Route::get('/pegawai/edit/{id}','PegawaiController@edit');
Route::post('/pegawai/update','PegawaiController@update');
Route::get('/pegawai/hapus/{id}','PegawaiController@hapus');
