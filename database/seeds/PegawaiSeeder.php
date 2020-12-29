<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class PegawaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // insert data ke database
        $faker = Faker::create('id_ID');
        for ($i = 1; $i < 50; $i++) {
            DB::table('tblpegawai')->insert([
                'nama' => $faker->name,
                'jabatan' => $faker->jobTitle,
                'umur' => $faker->numberBetween(24, 40),
                'alamat' => $faker->address,
            ]);
        }
    }
}
