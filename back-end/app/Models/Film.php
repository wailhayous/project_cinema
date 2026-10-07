<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    protected $table = 'films';
    protected $fillable = ['title', 'description', 'image', 'category', 'release_date', 'hours'];


    public function showtimes(){
        return $this->hasMany(Showtime::class);
    }

    protected function casts(): array{
        return [
            'release_date' => 'date',
        ];
    }
}