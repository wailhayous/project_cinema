<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ReservationSeat extends Model
{
    protected $table = 'reservation_seats';
    protected $fillable = ['reservation_id', 'seat_id', 'price'];

    public function reservation(){
        return $this->belongsTo(Reservation::class);
    }

    public function seat(){
        return $this->belongsTo(Seat::class);
    }
}
