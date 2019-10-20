<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Genre;

class GenreSeeder extends Seeder
{
    public function run()
    {
        $genre = array(
            [
                "name" => "Popular Music"
            ],
            [
                "name" => "Musical Theatre"
            ],
            [
                "name" => "Jazz"
            ],
            [
                "name" => "Folk Music"
            ],
            [
                "name" => "Rock"
            ],
            [
                "name" => "Hip Hop Music"
            ],
            [
                "name" => "Blues"
            ],
            [
                "name" => "Classical Music"
            ],
            [
                "name" => "Country Music"
            ],
            [
                "name" => "Heavy Metal"
            ],
            [
                "name" => "Rhythm and Blues"
            ],
            [
                "name" => "Reggae"
            ],
            [
                "name" => "Funk"
            ],
            [
                "name" => "Electronic Dance Music"
            ],
            [
                "name" => "Pop Music"
            ],
            [
                "name" => "Rapper"
            ]
        );

        foreach ($genre as $key => $value) {
            Genre::create($value);
        }
    }
}
