<?php

use App\Anggota;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class AnggotaSeed extends Seeder
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
            Anggota::create(
                [
                    'nama' => $faker->name,
                ]
            );
        }
    }
}
