<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
    use HasFactory;

    // Se realiza esto debido al cambio de llave primaria
    protected $primaryKey = 'cuenta';
    public $incrementing = false;
    protected $keyType = 'string';

    // Relacion a nivel de aplicacion -> GetCarreras
    public function carrera(){
        return $this->belongsTo(Carrera::class);
    }
}
