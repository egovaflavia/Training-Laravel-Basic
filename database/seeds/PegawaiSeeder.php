<?php

use App\Pegawai;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class PegawaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        for ($i = 1; $i < 50; $i++) {
            Pegawai::create([
                'nama' => $faker->name,
                'alamat' => $faker->address,
            ]);
        }
    }
}
