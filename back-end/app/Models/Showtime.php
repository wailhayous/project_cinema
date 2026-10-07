<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Showtime extends Model
{
    protected $table = 'showtimes';
    protected $fillable = ['film_id', 'salle_id', 'date', 'start_time', 'end_time', 'price'];

    public function film(){
        return $this->belongsTo(Film::class);
    }

    public function salle(){
        return $this->belongsTo(Salle::class);
    }
}
