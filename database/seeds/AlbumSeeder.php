<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Album;

class AlbumSeeder extends Seeder {
    public function run() {
        $faker = Faker::create();
        
        foreach (range(1, 100) as $index) {
            $title = $faker->text($maxNbChars = 20);
            Album::create([
                'artist_id' => rand(1, 50),
                'name' => $title,
            ]);
        }
    }
}
