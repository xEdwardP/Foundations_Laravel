<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
    use HasFactory;

    // Relacion a nivel de aplicacion -> GetCarreras
    public function carrera(){
        return $this->belongsTo(Carrera::class);
    }
}
