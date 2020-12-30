<?php

use App\Hadiah;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class HadiahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        for ($i = 0; $i < 10; $i++) {
            Hadiah::create(
                [
                    'nama_hadiah' => $faker->city
                ]
            );
        }
    }
}
