<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Alumno;
use App\Models\Pases;
class PasesController extends Controller
{
    public function guardarPase(Request $datos){
        $alumno_id = $datos->input('alumno_id');

        // Obtener el nombre del alumno utilizando el ID
        $alumno = Alumno::find($alumno_id);
        $nombre_alumno = $alumno->nombre;
        
        Pases::create([ 
            'user_id'       => auth()->user()->id,
            'alumno_id'     => $datos->input('alumno_id'),
            'hora_salida'   => $datos->input('hora_salida'),
            'motivos'       => $datos->input('motivos')
        ]);
        return redirect('/home');
    }
}
