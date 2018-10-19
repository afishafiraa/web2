<?php

use Illuminate\Database\Seeder;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
	public function run(){
        $faker = Faker\Factory::create();
		
		$limit = 20;
		
		for ($i = 0; $i <$limit; $i++){
			DB::table('model_mahasiswas')->insert([ //mengisi data di database
				'nama' => $faker->name,
				'email' => $faker->unique()->email,	//email unique sehingga tidak ada yang sama
				'nohp' => $faker->phoneNumber,
				'alamat' => $faker -> address,
			]);
		}
	}
}
