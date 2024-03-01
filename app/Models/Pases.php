    <?php

    namespace App\Models;

    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;

    class Pases extends Model
    {
        protected $table='pases';
        protected $fillable = ['user_id','alumno_id','nombre', 'grupo', 'fecha_salida', 'motivos'];
    }
