<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Seat extends Model
{
    protected $table = 'seats';
    protected $fillable = ['salle_id', 'seat_number', 'type'];

    public function salle(){
        return $this->belongsTo(Salle::class);
    }

    public function reservationSeats(){
        return $this->hasMany(ReservationSeat::class);
    }
    
}
