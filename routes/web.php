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

Route::get('transaksi1', function() {
	$transaksi = App\Transaksi::all();

	foreach ($transaksi as $brg) {
		echo $brg->barang . '<br>';
	}
});

Route::get('transaksi2', function() {
	$transaksi = App\Transaksi::all();

	foreach ($transaksi as $brg) {
		$pelanggan = App\Pelanggan::find($brg->pelanggan_id);
		echo $brg->barang . ' order by '. $pelanggan->nama . '<br>';
	}
});

Route::get('pelanggan/{id}', function($id) {
	$pelanggan = App\Pelanggan::find($id);

	echo '<pre>';
	echo $pelanggan->nama . ' Pernah Transaksi :';
	echo '<ul>';
	
	$transaksi = $pelanggan->transaksi;
	foreach ($transaksi as $brg) {
		echo '<li>' . $brg->barang . '</li>';
	}

	echo '</ul>';
});