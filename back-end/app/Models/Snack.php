<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Snack extends Model
{
    protected $table = 'snacks';
    protected $fillable = ['name', 'description', 'image', 'price', 'category'];

    public function reservationSnacks(){
        return $this->hasMany(ReservationSnack::class);
    }
}
