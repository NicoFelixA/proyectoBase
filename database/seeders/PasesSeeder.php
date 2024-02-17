<?php

namespace Database\Seeders;
use App\Models\Pases;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PasesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pases::create([ 
                                'user_id'       =>1,
                                'alumno_id'     =>1,
                                'hora_salida'  =>"2024-02-15 12:00:00",
                                'motivos'       =>"Enfermedad"
                            ]);
        Pases::create([ 
                                'user_id'       =>2,
                                'alumno_id'     =>2,
                                'hora_salida'  =>"2024-02-10 12:00:00",
                                'motivos'       =>"Cita de la visa"
                            ]);                         
        Pases::create([ 
                                'user_id'       =>2,
                                'alumno_id'     =>3,
                                'hora_salida'  =>"2024-01-15 12:00:00",
                                'motivos'       =>"Cita con el doctor"
                            ]);
        Pases::create([ 
                                'user_id'       =>1,
                                'alumno_id'     =>4,
                                'hora_salida'  =>"2024-01-11 12:00:00",
                                'motivos'       =>"Cita con el dermatologo"
                            ]);
        Pases::create([ 
                                'user_id'       =>1,
                                'alumno_id'     =>6,
                                'hora_salida'  =>"2024-02-01 12:00:00",
                                'motivos'       =>"Concurso"
                            ]);
        Pases::create([ 
                                'user_id'       =>2,
                                'alumno_id'     =>9,                                
                                'hora_salida'  =>"2024-02-7 12:00:00",                                
                                'motivos'       =>"Enfermedad"
                            ]);
        Pases::create([ 
                                'user_id'       =>2,
                                'alumno_id'     =>7,
                                'hora_salida'  =>"2024-01-10 12:00:00",
                                'motivos'       =>"Concurso Prototipos"
                            ]);
        Pases::create([ 
                                'user_id'       =>2,
                                'alumno_id'     =>22,
                                'hora_salida'  =>"2024-01-12 12:00:00",
                                'motivos'       =>"Cita pasaporte"
                            ]);
        Pases::create([ 
                                'user_id'       =>1,
                                'alumno_id'     =>14,
                                'hora_salida'  =>"2024-02-12 12:00:00",
                                'motivos'       =>"Torneo de futbol"
                            ]);
        Pases::create([ 
                                'user_id'       =>2,
                                'alumno_id'     =>56,
                                'hora_salida'  =>"2024-02-11 12:00:00",
                                'motivos'       =>"Cita de tarjeta del camión"
                            ]);
    }
}
