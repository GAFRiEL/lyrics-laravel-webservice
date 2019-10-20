<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ArtistSeeder::class);
        $this->call(GenreSeeder::class);
        $this->call(AlbumSeeder::class);
        $this->call(SongSeeder::class);
    }
}
