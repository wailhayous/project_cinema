<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ReservationSnack extends Model
{
    protected $table = 'reservation_snacks';
    protected $fillable = ['reservation_id', 'snack_id', 'quantity', 'price'];

    public function reservation(){
        return $this->belongsTo(Reservation::class);
    }

    public function snack(){
        return $this->belongsTo(Snack::class);
    }
}
