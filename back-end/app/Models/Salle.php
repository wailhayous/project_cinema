<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Salle extends Model
{
    protected $table = 'salles';
    protected $fillable = ['numero_salle', 'status'];

    public function seate(){
        return $this->hasMany(Seat::class);
    }

    public function showtime(){
        return $this->hasMany(Showtime::class);
    }
}
