<?php

namespace Database\Seeders;
use App\Models\Justificantes;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JustificantesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Justificantes::create([ 
                                'user_id'       =>1,
                                'alumno_id'     =>1,
                                'fecha_falta'   =>"2024-02-15",
                                'fecha_hasta'   =>"2024-02-16",
                                'motivos'       =>"Enfermedad"
                            ]);
        Justificantes::create([ 
                                'user_id'       =>2,
                                'alumno_id'     =>2,
                                'fecha_falta'   =>"2024-02-10",
                                'fecha_hasta'   =>"2024-02-12",
                                'motivos'       =>"Cita de la visa"
                            ]);                         
        Justificantes::create([ 
                                'user_id'       =>2,
                                'alumno_id'     =>3,
                                'fecha_falta'   =>"2024-01-15",
                                'fecha_hasta'   =>"2024-01-16",
                                'motivos'       =>"Cita con el doctor"
                            ]);
        Justificantes::create([ 
                                'user_id'       =>1,
                                'alumno_id'     =>4,
                                'fecha_falta'   =>"2024-01-11",
                                'fecha_hasta'   =>"2024-01-11",
                                'motivos'       =>"Cita con el dermatologo"
                            ]);
        Justificantes::create([ 
                                'user_id'       =>1,
                                'alumno_id'     =>6,
                                'fecha_falta'   =>"2024-02-01",
                                'fecha_hasta'   =>"2024-02-03",
                                'motivos'       =>"Concurso"
                            ]);
        Justificantes::create([ 
                                'user_id'       =>2,
                                'alumno_id'     =>9,
                                'fecha_falta'   =>"2024-02-7",
                                'fecha_hasta'   =>"2024-02-8",
                                'motivos'       =>"Enfermedad"
                            ]);
        Justificantes::create([ 
                                'user_id'       =>2,
                                'alumno_id'     =>7,
                                'fecha_falta'   =>"2024-01-10",
                                'fecha_hasta'   =>"2024-01-13",
                                'motivos'       =>"Concurso Prototipos"
                            ]);
        Justificantes::create([ 
                                'user_id'       =>2,
                                'alumno_id'     =>22,
                                'fecha_falta'   =>"2024-01-12",
                                'fecha_hasta'   =>"2024-01-12",
                                'motivos'       =>"Cita pasaporte"
                            ]);
        Justificantes::create([ 
                                'user_id'       =>1,
                                'alumno_id'     =>14,
                                'fecha_falta'   =>"2024-02-12",
                                'fecha_hasta'   =>"2024-02-13",
                                'motivos'       =>"Torneo de futbol"
                            ]);
        Justificantes::create([ 
                                'user_id'       =>2,
                                'alumno_id'     =>56,
                                'fecha_falta'   =>"2024-02-11",
                                'fecha_hasta'   =>"2024-02-12",
                                'motivos'       =>"Cita de tarjeta del camión"
                            ]);
    }
}