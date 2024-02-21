<?php

namespace App\Http\Controllers;
use App\Models\MisJustificantes;
use App\Models\Alumno; 
use Illuminate\Http\Request;

class JustificanteController extends Controller
{
    public function guardarJustificante(Request $datos){
        MisJustificantes::create([ 
            'nombre'        =>$datos->input('nombre'),
            'fecha_falta'   =>"2024-02-20 02:40",
            'fecha_hasta'   =>"2024-02-20 02:40",
            'motivos'       =>"Mal estar"
        ]);
        return redirect('/home');
    }
    public function consultar(){
        $alumnos = Alumno::all();
        return view('alumno.consultar', compact('alumnos'));
    }        
}
