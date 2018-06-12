<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon; //Memanggil Carbon untuk menjalankan generate value datetime

class PelangganTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Method 1
        DB::table('pelanggan')->insert([
            'nama' 			=> str_random(10),
           	'created_at'	=> Carbon::now()->format('Y-m-d H:i:s'),
        ]);

        //Method 2 with loop (will generate 5 data)
        for ($i=0; $i < 5; $i++) { 
        	DB::table('pelanggan')->insert([
	            'nama' 			=> str_random(10),
	           	'created_at'	=> Carbon::now()->format('Y-m-d H:i:s'),
	        ]);
        }

        //Method 3
        $pelanggan = [
			[
				'nama'			=> 'Rudi', 
				'created_at'	=> Carbon::now()->format('Y-m-d H:i:s')
			],

			[
				'nama'			=> 'Ajeng', 
				'created_at'	=> Carbon::now()->format('Y-m-d H:i:s')
			],

			[
				'nama'			=> 'Adli', 
				'created_at'	=> Carbon::now()->format('Y-m-d H:i:s')
			],

			[
				'nama'			=> 'Alfi', 
				'created_at'	=> Carbon::now()->format('Y-m-d H:i:s')
			],
		];

		// masukkan data ke database
		DB::table('pelanggan')->insert($pelanggan);
    }
}
