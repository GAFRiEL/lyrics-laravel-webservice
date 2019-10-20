<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    protected $fillable = [
        'name'
    ];
    
    public function song() {
        return $this->hasMany('App\Song', 'genre_id', 'id');
    }
}
