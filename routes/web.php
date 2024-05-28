<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JustificanteController;
use App\Http\Controllers\VerificacionController;
use App\Http\Controllers\PasesController;
use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\ProfileController;
use App\Models\Justificantes;

use SimpleSoftwareIO\QrCode\Facades\QrCode;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
    
});
    Route::get('/MostrarVerificacion/{id}', [VerificacionController::class, 'MostrarVerificacion']);
    Route::post('/verificar-codigo', [VerificacionController::class, 'Verificar']);


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::group(['middleware' => ['admin', 'role:admin']], function() {
    Route::get('/home', function () {
        return view('administrador.home');
    });
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    //Rutas de alumnos
    Route::get('/administrador/registrarUser', [AlumnoController::class, 'registrarUser']);
    Route::get('/administrador/consultar', [AlumnoController::class, 'consultar']);
    Route::get('/administrador/consultarPases', [AlumnoController::class, 'consultarPases']);
    Route::get('/administrador/registrar', [AlumnoController::class, 'registrar']);
    Route::get('/administrador/registrarPases', [AlumnoController::class, 'registrarPases']);
    Route::get('/reporte/pdf', [AlumnoController::class, 'reportePdf']);
    Route::delete('/elemento/{id}', [AlumnoController::class, 'eliminar'])->name('elemento.eliminar');
    Route::get('/reporte/pdf/{id}', [AlumnoController::class, 'reporteAlumnoPdf']);
    Route::get('/reporte/pdfPase/{id}', [AlumnoController::class, 'reporteAlumnoPdfPase']);
    Route::post('guardar', [JustificanteController::class, 'guardarJustificante']);
    Route::post('guardarPase', [PasesController::class, 'guardarPase']);
    Route::post('guardarUser', [AlumnoController::class, 'guardarUser']);
    Route::delete('/justificantes/{id}', [JustificanteController::class, 'eliminar'])->name('elemento.eliminar');
    Route::post('/justificantes/aceptar/{id}', [JustificanteController::class, 'aceptar'])->name('elemento.aceptar');
    Route::match(['get', 'post'], '/administrador/aceptados', [AlumnoController::class, 'aceptados']);
    //Rutas de administrador
    Route::get('/homeAdministrador', [HomeController::class, 'homeAdministrador']);
        
    

    //Ruta de ejemplo para obtener detalle de calificacion
    Route::get('alumno/materias', [AlumnoController::class, 'materias']);
    Route::get('generarQR', [AlumnoController::class, 'generaQR']);
});

Route::group(['prefix' => 'alumno','middleware' => ['alumno', 'role:alumno']], function() {
   
    Route::get('/alumno/consultaralumno', [AlumnoController::class, 'consultaralumno']);
    Route::get('/alumno/consultarpasesalumno', [AlumnoController::class, 'consultarpasesalumno']);
    Route::get('/alumno/registraralumno', [AlumnoController::class, 'registraralumno']);
    Route::get('/alumno/registrarpasesalumno', [AlumnoController::class, 'registrarpasesalumno']);
    Route::get('/reporte/pdf', [AlumnoController::class, 'reportePdf']);
    Route::delete('/elemento/{id}', [AlumnoController::class, 'eliminar'])->name('elemento.eliminar');
    Route::get('/reporte/pdf/{id}', [AlumnoController::class, 'reporteAlumnoPdf']);
    Route::get('generarQR', [AlumnoController::class, 'generaQR']);
    Route::get('/home', [HomeController::class, 'home']);

});

require __DIR__.'/auth.php';

