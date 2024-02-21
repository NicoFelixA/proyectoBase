<?php

namespace Database\Seeders;
use App\Models\MisJustificantes;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MisJustificantesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        MisJustificantes::create([ 
            'nombre'        =>"Félix Aguilasocho Nicolás",
            'grupo'     =>"6AVP",
            'fecha_falta'   =>"2024-02-15",
            'fecha_hasta'   =>"2024-02-16",
            'estatus'       =>1
        ]);
    }
}
