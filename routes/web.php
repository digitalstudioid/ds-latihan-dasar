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

Route::get('pelanggan', function() {
	$pelanggan = App\Pelanggan::find(1);
	return $pelanggan;
});

Route::get('nama-pelanggan1', function() {
	$pelanggan = App\Pelanggan::where('nama', '=', 'Rudi')->get();
	return $pelanggan;
});

Route::get('nama-pelanggan2', function() {
	$pelanggan = App\Pelanggan::where('nama', '=', 'Rudi')->first();
	return $pelanggan->id;
});

Route::get('nama-pelanggan3', function() {
	$pelanggan = App\Pelanggan::where('nama', '=', 'Rudi')->first();
	return $pelanggan->nama;
});

Route::get('nama-pelanggan4', function() {
	$pelanggan = App\Pelanggan::where('nama', 'like', 'Rudi%')->first();
	return $pelanggan;
});


