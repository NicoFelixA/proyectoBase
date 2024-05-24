<?php

namespace Database\Seeders;
use App\Models\Aceptados;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AceptadosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Aceptados::create([  
            'user_id'       =>1,
            'alumno_id'     =>1,
            'fecha_falta'   =>"2024-01-15",
            'fecha_hasta'   =>"2024-01-16",
            'motivos'       =>"Enfermedad",
        ]); 
        Aceptados::create([  
            'user_id'       =>1,
            'alumno_id'     =>2,
            'fecha_falta'   =>"2024-01-15",
            'fecha_hasta'   =>"2024-01-16",
            'motivos'       =>"Enfermedad",
        ]);  Aceptados::create([  
            'user_id'       =>1,
            'alumno_id'     =>3,
            'fecha_falta'   =>"2024-01-15",
            'fecha_hasta'   =>"2024-01-22",
            'motivos'       =>"Cita de la visa",
        ]);  Aceptados::create([  
            'user_id'       =>1,
            'alumno_id'     =>4,
            'fecha_falta'   =>"2024-01-11",
            'fecha_hasta'   =>"2024-01-16",
            'motivos'       =>"Reposo por cirugia",
        ]);  Aceptados::create([  
            'user_id'       =>1,
            'alumno_id'     =>5,
            'fecha_falta'   =>"2024-01-15",
            'fecha_hasta'   =>"2024-01-16",
            'motivos'       =>"Personal",
        ]);  Aceptados::create([  
            'user_id'       =>1,
            'alumno_id'     =>6,
            'fecha_falta'   =>"2024-01-15",
            'fecha_hasta'   =>"2024-01-16",
            'motivos'       =>"Concurso local",
        ]);  Aceptados::create([  
            'user_id'       =>1,
            'alumno_id'     =>7,
            'fecha_falta'   =>"2024-01-15",
            'fecha_hasta'   =>"2024-01-16",
            'motivos'       =>"Enfermedad",
        ]);  Aceptados::create([  
            'user_id'       =>1,
            'alumno_id'     =>8,
            'fecha_falta'   =>"2024-01-15",
            'fecha_hasta'   =>"2024-01-16",
            'motivos'       =>"Enfermedad",
        ]);  Aceptados::create([  
            'user_id'       =>1,
            'alumno_id'     =>9,
            'fecha_falta'   =>"2024-01-15",
            'fecha_hasta'   =>"2024-01-19",
            'motivos'       =>"Concurso nacional",
        ]);  Aceptados::create([  
            'user_id'       =>1,
            'alumno_id'     =>10,
            'fecha_falta'   =>"2024-01-15",
            'fecha_hasta'   =>"2024-01-16",
            'motivos'       =>"Enfermedad",
        ]); 
    }
}
