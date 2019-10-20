<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Song;

class SongSeeder extends Seeder {
        public function run() {
        $faker = Faker::create();

        foreach (range(1, 200) as $index) {
            $title = $faker->text($maxNbChars = 25);
            Song::create([
                'genre_id' => rand(1, 16),
                'album_id' => rand(1, 100),
                'name' => $title,
                'lyrics' => $faker->paragraph($nbSentences = 60, $variableNbSentences = true)
            ]);
        }
    }
}
