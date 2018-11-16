<?php

use Illuminate\Database\Seeder;

class ObatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create(); //import library faker
        $limit = 10;
        for ($i = 0; $i < $limit; $i++) {
            DB::table('obat')->insert([
                'nama_obat' => $faker->name,
                'harga' => "10000", 
                'stok' => "10000",
                'expired_date' => $faker->date,
				'production_date' => $faker->date,
            ]);
        }
    }
}
