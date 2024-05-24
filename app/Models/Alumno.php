<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Alumno extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'alumnos';

    protected $fillable = [
        'nombre', // Aquí agregas el campo 'nombre' al array fillable
        'paterno',
        'materno',
        'curp',
        'carrera',
        'generacion',
        'turno',
        'numero_control',
        'semestre',
        'grupo',
        'sexo',
        'nombrePadre',
        'numeroPadre',
    ];

    public function materias(){
        return $this->hasMany(AlumnoMateria::class, 'alumno_id', 'id')->with('materia');
    }

    public function justificantes()
    {
        return $this->hasMany(Justificantes::class);
    }
}
