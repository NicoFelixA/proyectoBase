<?php

namespace Database\Seeders;
use App\Models\MisPases;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MisPasesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        MisPases::create([ 
            'nombre'        =>"Félix Aguilasocho Nicolás",
            'grupo'     =>"6AVP",
            'salida'        =>"2024-02-20 02:40",
            'motivos'       =>"Mal estar"
        ]);
        MisPases::create([ 
            'nombre'        =>"Félix Aguilasocho Nicolás",
            'grupo'     =>"6AVP",
            'salida'        =>"2024-02-20 02:40",
            'motivos'       =>"Mal estar"
        ]);
    }
}
