<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class PosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        for ($i = 0; $i < 20; $i++) {
            DB::table('pos')->insert([
                'nama_barang' => $faker->word,
                'price' => $faker->randomFloat(3, 10, 100),
                'stock' => $faker->numberBetween(1, 100),
            ]);
        }
    }
}
