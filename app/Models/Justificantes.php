<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Justificantes extends Model
{
    protected $fillable = ['user_id','alumno_id','nombre', 'grupo', 'fecha_falta', 'fecha_hasta', 'motivos'];
}