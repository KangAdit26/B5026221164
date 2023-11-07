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
