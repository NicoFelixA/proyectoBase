<?php

namespace App\Http\Controllers;

use PDF;
use App\Models\Alumno;
use App\Models\Justificantes;
use App\Models\Aceptados    ;
use App\Models\Pases;
use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class AlumnoController extends Controller
{
    public function consultar(){
    $justificantes = Justificantes::with('alumno')->get();

        return view('administrador.consultar', compact('justificantes'));
    }
    public function consultaralumno(){
        $justificantes = Justificantes::with('alumno')->get();
        return view('alumno.consultaralumno', compact('justificantes'));
    }
    public function aceptados(){
        $aceptados = Aceptados::with('alumno')->get();
    
            return view('administrador.aceptados', compact('aceptados'));
        }
    
    public function consultarPases(){
        $pases = Pases::with('alumno')->get();

        return view('administrador.consultarPases', compact('pases'));
    }
    public function consultarpasesalumno(){

        return view('alumno.consultarpasesalumno');
    }

    public function registrar(){
        //consultas el alumno
        $alumnos=Alumno::all(); 
        return view('administrador.registrar', compact('alumnos'));
    }
    public function registraralumno(){
        //consultas el alumno
        return view('alumno.registraralumno');
    }
    public function registrarUser(){
        //consultas el alumno
        return view('administrador.registrarUser');
    }
    public function registrarPases(){
        $alumnos=Alumno::all(); 
        //registrar el alumno
        return view('administrador.registrarPases', compact('alumnos'));
    }
    public function registrarpasesalumno(){
        //registrar el alumno
        return view('alumno.registrarpasesalumno');
    }
    public function guardarUser(Request $datos){
        Alumno::create([
            'nombre' => $datos->input('nombre'),
            'paterno' => $datos->input('paterno'),
            'materno' => $datos->input('materno'),
            'curp' => $datos->input('curp'),
            'carrera' => $datos->input('carrera'),
            'generacion' => $datos->input('generacion'),
            'turno' => $datos->input('turno'),
            'numero_control' => $datos->input('numero_control'),
            'semestre' => $datos->input('semestre'),
            'grupo' => $datos->input('grupo'),
            'sexo' => $datos->input('sexo'),
            'nombrePadre' => $datos->input('nombrePadre'),
            'numeroPadre' => $datos->input('numeroPadre')
        ]);
    
        // Redirigir a la página de inicio con un mensaje de éxito
        return redirect('/home')->with('success', 'Alumno registrado exitosamente');
    }
    public function eliminar($id)
    {
        // Lógica para eliminar un alumno
        $alumno = Alumno::findOrFail($id);
        $alumno->delete();

        return redirect()->back()->with('success', 'Alumno eliminado correctamente');
    }

    public function reportePdf(){
        $justificantes = array("Alumno1", "Alumno2", "Alumno3"); //DAtos de la base de datos
        PDF::SetPaper('A4', 'landscape'); //Configuracion de la libreria
        $pdf = PDF::loadView('PDF.reporteGenerico', array('justificantes' => $justificantes)); //Carga la vista y la convierte a PDF
        return $pdf->download("reporteGenerico.pdf"); //Descarga el PDF con ese nombre
    }

    public function reporteAlumnoPdf($id){
        $justificantes = Justificantes::find($id);
        PDF::SetPaper('A4', 'landscape'); //Configuracion de la libreria
        $pdf = PDF::loadView('PDF.reporteAlumno', array('justificantes' => $justificantes)); //Carga la vista y la convierte a PDF
        return $pdf->download("reporteAlumno".$justificantes->id.".pdf"); //Descarga el PDF con ese nombre
    }

    public function reporteAlumnoPdfPase($id){
        $pases = Pases::find($id);
        PDF::SetPaper('A4', 'landscape'); //Configuracion de la libreria
        $pdf = PDF::loadView('PDF.reportePases', array('pases' => $pases)); //Carga la vista y la convierte a PDF
        return $pdf->download("reportePases".$pases->id.".pdf"); //Descarga el PDF con ese nombre
    }

    public function materias(){
        //Este id de alumno lo van a sacar del Auth::user()->alumno_id
        $id=2;
        $justificantes = Justificantes::with('materias')->find($id);


        dd($alumno);

    }

    public function generaQR(){
        return QrCode::size(300)->generate('https://drive.google.com/file/d/1uDfGbyTUt5AVjzz6oFAh_bEa9B0rCEAE/view?usp=sharing');
    }

}
