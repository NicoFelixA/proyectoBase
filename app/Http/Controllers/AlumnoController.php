<?php

namespace App\Http\Controllers;

use PDF;
use App\Models\Alumno;
use App\Models\Justificantes;
use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class AlumnoController extends Controller
{
    public function consultar(){
        $justificantes = Justificantes::all();

        return view('administrador.consultar', compact('justificantes'));
    }
    public function consultaralumno(){
        $alumnos = Alumno::all();

        return view('alumno.consultaralumno', compact('alumnos'));
    }

    
    public function consultarPases(){
        $alumnos = Alumno::all();

        return view('administrador.consultarPases', compact('alumnos'));
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
    public function registrarPases(){
        //registrar el alumno
        return view('administrador.registrarPases');
    }
    public function registrarpasesalumno(){
        //registrar el alumno
        return view('alumno.registrarpasesalumno');
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
        $justificantes = Justificantes::find($id);
        PDF::SetPaper('A4', 'landscape'); //Configuracion de la libreria
        $pdf = PDF::loadView('PDF.reportePases', array('justificantes' => $justificantes)); //Carga la vista y la convierte a PDF
        return $pdf->download("reportePases".$justificantes->id.".pdf"); //Descarga el PDF con ese nombre
    }

    public function materias(){
        //Este id de alumno lo van a sacar del Auth::user()->alumno_id
        $id=2;
        $justificantes = Justificantes::with('materias')->find($id);


        dd($alumno);

    }

    public function generaQR(){
        return QrCode::size(300)->generate('Aquí va La URL que se va a acceder');
    }

}
