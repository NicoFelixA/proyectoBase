<?php

namespace App\Http\Controllers;
use App\Models\Justificantes;
use Illuminate\Http\Request;

class JustificanteController extends Controller
{
    public function guardarJustificante(Request $datos){

        Justificantes::create([ 
            'user_id'       => auth()->user()->id,
            'alumno_id'     =>  $datos->input('alumno_id'),
            'nombre'        => 'Nicolas',
            'grupo'         => $datos->input('grupo'),
            'fecha_falta'   => $datos->input('fecha_falta'),
            'fecha_hasta'   => $datos->input('fecha_hasta'),
            'motivos'       => $datos->input('motivos')
        ]);
        return redirect('/home');
    }
}
