<?php
    Namespace App\Models;

    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;

    class Pases extends Model
    {
        protected $fillable = ['user_id','alumno_id','nombre', 'grupo', 'hora_salida', 'motivos'];
        public function alumno()
        {
            return $this->belongsTo(Alumno::class, 'alumno_id');
        }
    }
