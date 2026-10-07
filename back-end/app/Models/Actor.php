<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Actor extends Model
{
    protected $fillable = ['name', 'image'];

    public function films(){
        return $this->belongsToMany(Film::class);
    }
}
