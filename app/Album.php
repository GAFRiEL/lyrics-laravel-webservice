<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    protected $fillable = [
        'name',
        'artist_id'
    ];

    public function artist() {
        return $this->belongsTo('App\Artist', 'artist_id', 'id');
    }

    public function song() {
        return $this->hasMany('App\Song');
    }
}
