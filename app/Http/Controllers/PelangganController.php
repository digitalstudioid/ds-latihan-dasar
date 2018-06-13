<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pelanggan;

class PelangganController extends Controller
{
    public function Pelanggan1($id) {
    	$pelanggan = Pelanggan::find($id);

		echo '<pre>';
		echo $pelanggan->nama . ' Pernah Transaksi :';
		echo '<ul>';
		
		$transaksi = $pelanggan->transaksi;
		foreach ($transaksi as $brg) {
			echo '<li>' . $brg->barang . '</li>';
		}

		echo '</ul>';
    }

    public function Pelanggan2($id) {
    	$pelanggan = Pelanggan::find($id);
    	$data = array('pelanggan' => $pelanggan);
    	return view('latihan.pelanggan2', $data);
    }
}
