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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


// jenis
Route::get('/jenis', 'jenisController@index');
Route::get('/jenis/add', 'jenisController@add');
Route::post('/jenis/add', 'jenisController@store');
Route::get('/jenis/edit/{id}', 'jenisController@edit');
Route::put('/jenis/{id}', 'jenisController@update');
Route::delete('/jenis/{id}', 'jenisController@delete');



Route::get('/ukuran', 'ukuranController@index');
Route::get('/ukuran/add', 'ukuranController@add');
Route::post('/ukuran/add', 'ukuranController@store');
Route::get('/ukuran/edit/{id}', 'ukuranController@edit');
Route::put('/ukuran/{id}', 'ukuranController@update');
Route::delete('/ukuran/{id}', 'ukuranController@delete');

Route::get('/senar', 'senarController@index');
Route::get('/senar/add', 'senarController@add');
Route::post('/senar/add', 'senarController@store');


Route::get('/tambah', 'senarController@tambah');

Route::get('/tambahUkuran', 'senarController@tambahUkuran');


