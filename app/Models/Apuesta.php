<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apuesta extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function juego()
    {
        return $this->belongsTo(Juego::class, 'id_game');
    }
}
