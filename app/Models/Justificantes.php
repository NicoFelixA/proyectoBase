<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Justificantes extends Model
{
    protected $fillable = ['user_id','alumno_id', 'fecha_falta', 'fecha_hasta', 'motivos'];
    public function alumno()
    {
        return $this->belongsTo(Alumno::class, 'alumno_id');
    }
}