<?php

namespace App\Http\Controllers;
use App\Models\MisJustificantes;
use Illuminate\Http\Request;

class JustificanteController extends Controller
{
    public function guardarJustificante(Request $datos){
        dd($datos->all());

        MisJustificantes::create([ 
            'nombre'        => $datos->input('nombre'),
            'grupo'         => $datos->input('grupo'),
            'fecha_falta'   => $datos->input('fecha_falta'),
            'fecha_hasta'   => $datos->input('fecha_hasta'),
            'motivos'       => $datos->input('motivos')
        ]);
        return redirect('/home');
    }
}
