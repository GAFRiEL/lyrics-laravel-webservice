<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Artist;

class ArtistSeeder extends Seeder
{
    public function run() {
        $faker = Faker::create();

        for ($i = 0; $i < 50; $i++) {
            $name = $faker->name;
            Artist::create([
                'name' => $name
            ]);
        }
    }
}
