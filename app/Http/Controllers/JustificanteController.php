<?php

namespace App\Http\Controllers;

use App\Mail\Correo;
use App\Models\Alumno;
use App\Models\Aceptados;
use Illuminate\Http\Request;
use App\Models\Justificantes;
use App\Models\VerificarCodigo;
use App\Mail\correoVerificacion;
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
            'motivos'       => $datos->input('motivos'),
        ]);

            // Generar código de verificación de 6 números
            $codigoVerificacion = mt_rand(100000, 999999);

            // Enviar correo con el código de verificación
           Mail::to('nicolas.felix21@cetis107.edu.mx')->send(new correoVerificacion($codigoVerificacion));
            // Enviar correo con los datos del justificante
            $alumno=$justificante->alumno;
            Mail::to('nicolas.felix21@cetis107.edu.mx')->send(new Correo($justificante, $alumno));

            // Crear un nuevo registro en la tabla VerificarCodigo
            VerificarCodigo::create([
                'justificante_id'       => $justificante->id,
                'codigo_verificacion'   => $codigoVerificacion
            ]);
            return redirect('/home');
    }   
    public function eliminar($id)
    {
        $justificante = Justificantes::find($id);

        if ($justificante) {
            $justificante->delete();
            return redirect()->back()->with('success', 'Justificante eliminado exitosamente.');
        }

        return redirect()->back()->with('error', 'Justificante no encontrado.');
    }

    public function aceptar($id)
    {
        $justificante = Justificantes::find($id);

        if ($justificante) {
            // Crear un nuevo registro en la tabla aceptados
            Aceptados::create([
                'user_id'       => $justificante->user_id,
                'alumno_id'     => $justificante->alumno_id,
                'fecha_falta'   => $justificante->fecha_falta,
                'fecha_hasta'   => $justificante->fecha_hasta,
                'motivos'       => $justificante->motivos,
                'estatus'       => 'Aceptado'
            ]);

            // Eliminar el justificante de la tabla original
            $justificante->delete();

            return redirect()->back()->with('success', 'Justificante aceptado y movido a la tabla de aceptados.');
        }

        return redirect()->back()->with('error', 'Justificante no encontrado.');
    }
}
