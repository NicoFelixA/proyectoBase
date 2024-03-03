<?php

namespace App\Http\Controllers;
use App\Models\Justificantes;
use App\Models\Alumno;
use App\Mail\Correo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail; // Importa la clase Mail

class VerificacionController extends Controller
{
    public function verificarCodigo(Request $request)
    {
        $justificante = Justificantes::findOrFail($request->justificante_id);

        if ($request->codigo_verificacion == $justificante->codigo_verificacion) {
            return redirect()->back()->with('message', 'El código de verificación es correcto');
        } else {
            return redirect()->back()->with('message', 'El código de verificación es incorrecto');
        }
    }
   
}