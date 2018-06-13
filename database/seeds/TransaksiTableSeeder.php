<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon; //Memanggil Carbon untuk menjalankan generate value datetime

class TransaksiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    	$transaksi = [
			[
				'barang'		=> 'Jam Tangan',
				'pelanggan_id'	=> '7',
				'created_at'	=> Carbon::now()->format('Y-m-d H:i:s')
			],

			[
				'barang'		=> 'Topi',
				'pelanggan_id'	=> '7',
				'created_at'	=> Carbon::now()->format('Y-m-d H:i:s')
			],

			[
				'barang'		=> 'Sepatu',
				'pelanggan_id'	=> '8',
				'created_at'	=> Carbon::now()->format('Y-m-d H:i:s')
			],

			[
				'barang'		=> 'Sandal',
				'pelanggan_id'	=> '9',
				'created_at'	=> Carbon::now()->format('Y-m-d H:i:s')
			],

			[
				'barang'		=> 'Kaos',
				'pelanggan_id'	=> '10',
				'created_at'	=> Carbon::now()->format('Y-m-d H:i:s')
			],
		];

		// masukkan data ke database
		DB::table('transaksi')->insert($transaksi);
    }
}
