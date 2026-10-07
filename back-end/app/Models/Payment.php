<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $table = 'payments';
    protected $fillable = ['reservation_id', 'amount', 'method', 'status', 'transaction_id', 'paid_at'];

    public function reservation(){
        return $this->belongsTo(Reservation::class);
    }
}
