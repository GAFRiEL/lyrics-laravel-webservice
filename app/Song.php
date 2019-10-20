<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    protected $fillable = [
        'name',
        'lyrics',
        'album_id',
        'genre_id'
    ];

    public function album() {
        return $this->belongsTo('App\Album', 'album_id', 'id');
    }

    public function genre() {
        return $this->belongsTo('App\Genre', 'genre_id', 'id');
    }
}
