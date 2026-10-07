<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $table = 'reservations';
    protected $fillable = ['user_id', 'showtime_id', 'total_price', 'status'];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function showtime(){
        return $this->belongsTo(Showtime::class);
    }

    public function reservationSeats(){
        return $this->hasMany(ReservationSeat::class);
    }

    public function reservationSnacks(){
        return $this->hasMany(ReservationSnack::class);
    }

    public function payments(){
        return $this->hasMany(Payment::class);
    }

    public function tickets(){
        return $this->hasMany(Ticket::class);
    }
}
