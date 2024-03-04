<?php

namespace App\Http\Controllers;

use App\Models\VerificarCodigo;
use App\Models\Justificantes;
use App\Models\Alumno;
use App\Mail\Correo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail; // Importa la clase Mail

class VerificacionController extends Controller
{
    public function MostrarVerificacion($id)
    {
        $justificante= Justificantes::find($id);
        return view('blankpage', compact('justificante'));
    }
    public function Verificar(Request $request)
    {
        
        $codigo=VerificarCodigo::where('justificante_id', '=', $request->input('justificante_id'))->first();
        if($request->input('codigo_verificacion') == $codigo->codigo_verificacion){
            $respuesta=1;
            $justificante= Justificantes::find($request->input('justificante_id'));
            $justificante->estatus="Aceptado";
            $justificante->save();
            return view('RespuestaVerificacion', compact('respuesta'));
        }else{
            $respuesta=0;
            return view('RespuestaVerificacion', compact('respuesta'));
        }
        return view('blankpage');
    }
   
}