<?php

namespace App\Http\Controllers;
use App\Models\Justificantes;
use App\Models\Alumno;
use App\Mail\Correo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail; // Importa la clase Mail


class JustificanteController extends Controller
{
    public function guardarJustificante(Request $datos)
{
    $alumno_id = $datos->input('alumno_id');

    // Obtener el nombre del alumno utilizando el ID
    $alumno = Alumno::find($alumno_id);
    $nombre_alumno = $alumno->nombre;

    // Crear el registro del justificante
    Justificantes::create([
        'user_id'       => auth()->user()->id,
        'alumno_id'     => $datos->input('alumno_id'),
        'fecha_falta'   => $datos->input('fecha_falta'),
        'fecha_hasta'   => $datos->input('fecha_hasta'),
        'motivos'       => $datos->input('motivos')
    ]);

    // Obtener el nombre del usuario actual
    $nombre_usuario = auth()->user()->name;

    // Obtener el justificante creado
    $justificante = Justificantes::with('alumno')->latest()->first();

    // Enviar correo con los datos del justificante
    Mail::to('nicolas.felix21@cetis107.edu.mx')->send(new Correo($nombre_usuario, $justificante));

    // Redireccionar con mensaje de éxito
    return redirect()->back()->with('message', 'Correo enviado correctamente');

    // Generar código de verificación de 6 números
    $codigoVerificacion = mt_rand(100000, 999999);

    // Enviar correo electrónico con el código de verificación
    Mail::to('nicolas.felix21@cetis107.edu.mx')->send(new CodigoVerificacion($codigoVerificacion));

    return 'Correo enviado con éxito';
}

}
