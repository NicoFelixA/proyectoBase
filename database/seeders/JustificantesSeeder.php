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
                                'motivos'       =>"Enfermedad",
                                'estatus'       => "No aceptado"                
                            ]); 
                         
                           
                            
        Justificantes::create([ 
                                'user_id'       =>2,
                                'alumno_id'     =>2,
                                'fecha_falta'   =>"2024-02-10",
                                'fecha_hasta'   =>"2024-02-12",
                                'motivos'       =>"Cita de la visa",
                                'estatus'       => "No aceptado"
                            ]);                         
        Justificantes::create([ 
                                'user_id'       =>2,
                                'alumno_id'     =>3,
                                'fecha_falta'   =>"2024-01-15",
                                'fecha_hasta'   =>"2024-01-16",
                                'motivos'       =>"Cita con el doctor",
                                'estatus'       => "No aceptado"
                            ]);   Justificantes::create([  
                                'user_id'       =>1,
                                'alumno_id'     =>1,
                                'fecha_falta'   =>"2024-04-22",
                                'fecha_hasta'   =>"2024-04-23",
                                'motivos'       =>"Enfermedad",
                                'estatus'       => "No aceptado"                
                            ]); 
        Justificantes::create([ 
                                'user_id'       =>1,
                                'alumno_id'     =>4,
                                'fecha_falta'   =>"2024-01-11",
                                'fecha_hasta'   =>"2024-01-11",
                                'motivos'       =>"Cita con el dermatologo",
                                'estatus'       => "No aceptado"
                            ]);
        Justificantes::create([ 
                                'user_id'       =>1,
                                'alumno_id'     =>6,                      
                                'fecha_falta'   =>"2024-02-01",
                                'fecha_hasta'   =>"2024-02-03",
                                'motivos'       =>"Concurso",
                        'estatus'       => "No aceptado"                  
                            ]);
        Justificantes::create([ 
                                'user_id'       =>2,
                                'alumno_id'     =>9,                      
                                'fecha_falta'   =>"2024-02-7",
                                'fecha_hasta'   =>"2024-02-8",
                                'motivos'       =>"Enfermedad",
                                'estatus'       => "No aceptado"                
                            ]);
        Justificantes::create([ 
                                'user_id'       =>2,
                                'alumno_id'     =>7,                             
                                'fecha_falta'   =>"2024-01-10",
                                'fecha_hasta'   =>"2024-01-13",
                                'motivos'       =>"Concurso Prototipos",
                                'estatus'       => "No aceptado"
                            ]);
        Justificantes::create([ 
                                'user_id'       =>2,
                                'alumno_id'     =>22,                               
                                'fecha_falta'   =>"2024-01-12",
                                'fecha_hasta'   =>"2024-01-12",
                                'motivos'       =>"Cita pasaporte",
                        'estatus'       => "No aceptado"            
                            ]);
        Justificantes::create([ 
                                'user_id'       =>1,
                                'alumno_id'     =>14,                           
                                'fecha_falta'   =>"2024-02-12",
                                'fecha_hasta'   =>"2024-02-13",
                                'motivos'       =>"Torneo de futbol",
                                'estatus'       => "No aceptado"
                            ]);
        Justificantes::create([ 
                                'user_id'       =>2,
                                'alumno_id'     =>56,                            
                                'fecha_falta'   =>"2024-02-11",
                                'fecha_hasta'   =>"2024-02-12",
                                'motivos'       =>"Cita de tarjeta del camión",
                                'estatus'       => "No aceptado"
                            ]);
                             Justificantes::create([ 
                                'user_id'       =>2,
                                'alumno_id'     =>56,                            
                                'fecha_falta'   =>"2024-02-11",
                                'fecha_hasta'   =>"2024-02-12",
                                'motivos'       =>"Cita de tarjeta del camión",
                                'estatus'       => "No aceptado"
                            ]);
                            Justificantes::create([  
                                'user_id'       =>1,
                                'alumno_id'     =>1,
                                'fecha_falta'   =>"2024-03-10",
                                'fecha_hasta'   =>"2024-03-16",
                                'motivos'       =>"Concurso nacional",
                                'estatus'       => "No aceptado"                
                            ]); 
    }
}
