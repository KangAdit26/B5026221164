<?php

use App\Http\Controllers\NilaikuliahController;
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

Route::get('/js1', function () {
    return view('js1');
});

Route::get('/Latihan_layout', function () {
    return view('Latihan_layout');
});

Route::get('/js2', function () {
    return view('js2');
});

Route::get('/validasi', function () {
    return view('validasi');
});

Route::get('/Linktree', function () {
    return view('Linktree');
});

Route::get('/style', function () {
    return view('style');
});

Route::get('/hello', function () {
    return view('hello');
});

Route::get('/link', function () {
    return view('link');
});

Route::get('perkalian', 'App\Http\Controllers\DosenController@index') ;
Route::get('biodata', 'App\Http\Controllers\DosenController@biodata') ;
Route::get('showjam/{jam}', 'App\Http\Controllers\DosenController@showjam') ;
Route::get('/formulir', 'App\Http\Controllers\DosenController@formulir');
Route::post('/formulir/proses', 'App\Http\Controllers\DosenController@proses');

//route CRUD PEGAWAI
Route::get('/pegawai','App\Http\Controllers\PegawaiController@index');
Route::get('/pegawai/tambah','App\Http\Controllers\PegawaiController@tambah');
Route::post('/pegawai/store','App\Http\Controllers\PegawaiController@store');
Route::get('/pegawai/edit/{id}','App\Http\Controllers\PegawaiController@edit');
Route::get('/pegawai/view/{id}','App\Http\Controllers\PegawaiController@view');
Route::post('/pegawai/update','App\Http\Controllers\PegawaiController@update');
Route::get('/pegawai/hapus/{id}','App\Http\Controllers\PegawaiController@hapus');

Route::get('/pegawai/cari','App\Http\Controllers\PegawaiController@cari');

//route CRUD nilai kuliah
Route::get('nilaikuliah','App\Http\Controllers\NilaikuliahController@index2');
Route::get('nilaikuliah/tambah2','App\Http\Controllers\NilaikuliahController@tambah2');
Route::post('nilaikuliah/store','App\Http\Controllers\NilaikuliahController@store');

//route CRUD nilai kuliah
Route::get('flashdisk','App\Http\Controllers\FlashdiskController@index3');
Route::get('flashdisk/tambah3','App\Http\Controllers\FlashdiskController@tambah3');
Route::post('flashdisk/store','App\Http\Controllers\FlashdiskController@store');
Route::get('flashdisk/edit','App\Http\Controllers\FlashdiskController@edit');
Route::get('flashdisk/edit2/{id}','App\Http\Controllers\FlashdiskController@edit2');
Route::get('flashdisk/hapus/{id}','App\Http\Controllers\FlashdiskController@hapus');
Route::post('/flashdisk/update','App\Http\Controllers\FlashdiskController@update');
Route::get('/flashdisk/cari2','App\Http\Controllers\FlashdiskController@cari2');
Route::get('/flashdisk/view2/{id}','App\Http\Controllers\FlashdiskController@view2');

//route CRUD Keranjang Belanja
Route::get('keranjangbelanja','App\Http\Controllers\KeranjangbelanjaController@index4');
Route::get('keranjangbelanja/tambah4','App\Http\Controllers\KeranjangbelanjaController@tambah4');
Route::get('keranjangbelanja/hapus/{id}','App\Http\Controllers\KeranjangbelanjaController@hapus');
Route::post('keranjangbelanja/store','App\Http\Controllers\KeranjangbelanjaController@store');

//route CRUD EAS
Route::get('kategori','App\Http\Controllers\KategoriController@index5');
Route::post('kategori/pilih','App\Http\Controllers\KategoriController@pilih');

