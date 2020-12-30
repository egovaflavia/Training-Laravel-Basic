<?php

use App\Telepon;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class TeleponSeeder extends Seeder
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
            Telepon::create(
                [
                    'nomor_telepon' => $faker->phoneNumber,
                    'pengguna_id' => $faker->numberBetween(1, 5),
                ]
            );
        }
    }
}
