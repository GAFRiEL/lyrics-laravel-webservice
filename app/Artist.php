<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    protected $fillable = [
        'name'
    ];

    public function album() {
        return $this->hasMany('App\Album', 'artist_id', 'id');
    }
}
