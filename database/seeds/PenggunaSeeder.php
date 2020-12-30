<?php

use App\Pengguna;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class PenggunaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        for ($i = 0; $i < 5; $i++) {
            Pengguna::create(
                ['nama' => $faker->name]
            );
        }
    }
}
