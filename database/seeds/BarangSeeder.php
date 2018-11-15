<?php

use Illuminate\Database\Seeder;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$faker = Faker\Factory::create();
		
		$limit = 20;
		
		for ($i = 0; $i <$limit; $i++){
			DB::table('barang')->insert([ //mengisi data di database
				'nama_barang' =>'barang'.($i+1),
				'stok' => $faker->randomDigitNotNull,	//email unique sehingga tidak ada yang sama
				'harga' => $faker->randomNumber(5),
				'expired_date' => $faker -> date,
				'tanggal_produksi'=> $faker -> date,
			]);
		}
    }
}
