<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    protected $table = 'films';
    protected $fillable = ['title', 'description', 'image', 
    'category', 'release_date', 'hours', 'language', 'director'];


    public function showtimes(){
        return $this->hasMany(Showtime::class);
    }

    protected function casts(): array{
        return [
            'release_date' => 'date',
        ];
    }

    public function ratings(){
        return $this->hasMany(Rating::class);
    }

    public function actors(){
        return $this->belongsToMany(Actor::class);
    }
}