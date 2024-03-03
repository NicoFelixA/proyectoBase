<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VerificarCodigo extends Model
{
    use HasFactory;
    protected $table = 'verificar_codigos'; // Nombre de la tabla en la base de datos

    protected $fillable = [
        'justificante_id',
        'codigo_verificacion',
    ];

}
