<?php

namespace App\Http\Controllers;

use App\Mail\Correo;
use App\Models\Alumno;
use Illuminate\Http\Request;
use App\Models\Justificantes;
use App\Models\VerificarCodigo;
use Illuminate\Support\Facades\Mail;

class JustificanteController extends Controller
{
    public function guardarJustificante(Request $datos)
    {
        $alumno_id = $datos->input('alumno_id');

        // Obtener el nombre del alumno utilizando el ID
        $alumno = Alumno::find($alumno_id);
        $nombre_alumno = $alumno->nombre;

        // Crear un nuevo justificante
        $justificante = Justificantes::create([
            'user_id'       => auth()->user()->id,
            'alumno_id'     => $datos->input('alumno_id'),
            'fecha_falta'   => $datos->input('fecha_falta'),
            'fecha_hasta'   => $datos->input('fecha_hasta'),
            'motivos'       => $datos->input('motivos')
        ]);

        // Verificar si se creó correctamente el justificante
        if ($justificante) {
            // Generar código de verificación de 6 números
            $codigoVerificacion = mt_rand(100000, 999999);

            // Obtener el justificante creado
            $justificante = Justificantes::with('alumno')->latest()->first();

            // Enviar correo con el código de verificación
            Mail::to('nicolas.felix21@cetis107.edu.mx')->send(new Correo($codigoVerificacion));

            // Enviar correo con los datos del justificante
            Mail::to('nicolas.felix21@cetis107.edu.mx')->send(new Correo($justificante));

            // Crear un nuevo registro en la tabla VerificarCodigo
            VerificarCodigo::create([
                'justificante_id'       => $justificante->id,
                'codigo_verificacion'   => $codigoVerificacion
            ]);

        } else {
            // Manejar la situación en la que no se pudo crear el justificante
            return redirect()->back()->with('message', 'Error al crear el justificante');
        }
    }   
}