<?php

use App\Tag;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        for ($i = 0; $i < 20; $i++) {
            Tag::create(
                [
                    'tag' => $faker->city,
                    'article_id' => $faker->numberBetween(11, 20)
                ]
            );
        }
    }
}
