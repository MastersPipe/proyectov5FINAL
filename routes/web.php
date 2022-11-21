<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SistemaInscripcionesController;
use App\Http\Controllers\ProyectoController;
use App\Http\Controllers\AlumnoController;
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
/*
Route::get('/', function () {
    return view('auth.login');
});
*/
Auth::routes();
Auth::routes(['register'=>false, 'reset'=>false]);

Route::group(['middleware' =>'auth'], function(){

Route::get('/', [HomeController::class, 'index'])->name('home');

    //esta sección contiene las rutas asociadas a los Administradores
    Route::middleware(['auth', 'user-access:Admin'])->group(function () {
        Route::resource('proyectos', App\Http\Controllers\ProyectoController::class)->middleware('auth');
        Route::resource('alumnos', App\Http\Controllers\AlumnoController::class)->middleware('auth');   
        Route::resource('users', App\Http\Controllers\UserController::class)->middleware('auth');
        Route::get('/success', [HomeController::class, 'index'])->name('success');
        Route::get('/home', [HomeController::class, 'adminHome'])->name('admin.home');
    });
    //esta sección contiene las rutas asociadas a los Docentes
    Route::middleware(['auth', 'user-access:Docente'])->group(function () {
        Route::get('/docente/home', [HomeController::class, 'docenteHome'])->name('docente.home');
        Route::get('/docente/index', [ProyectoController::class, 'docente_index'])->name('proyecto.docente_index');
        Route::get('/docente/create', [ProyectoController::class, 'docente_create'])->name('proyecto.docente_create');
        Route::get('/docente/{proyecto}/edit', [ProyectoController::class, 'docente_edit'])->name('proyecto.docente_edit');
        Route::get('/docente/{proyecto}', [ProyectoController::class, 'docente_show'])->name('proyecto.docente_show');
        Route::post('docente', [ProyectoController::class, 'docente_store'])->name('proyecto.docente_store');
        Route::patch('docente/{proyecto}', [ProyectoController::class, 'docente_update'])->name('proyecto.docente_update');
        Route::put('docente/{proyecto}', [ProyectoController::class, 'docente_update'])->name('proyecto.docente_update');
        Route::get('/docente/success', [HomeController::class, 'docente_index'])->name('success');
    });
    //esta sección contiene las rutas asociadas a los Alumnos
    Route::middleware(['auth', 'user-access:Alumno'])->group(function () {
        Route::get('/estudiante/home', [HomeController::class, 'estudianteHome'])->name('estudiante.home');
        Route::get('/estudiante/index', [AlumnoController::class, 'estudiante_index'])->name('alumno.estudiante_index');
        Route::get('/estudiante/create', [AlumnoController::class, 'estudiante_create'])->name('alumno.estudiante_create');
        Route::get('/estudiante/{alumno}/edit', [AlumnoController::class, 'estudiante_edit'])->name('alumno.estudiante_edit');
        Route::get('/estudiante/{alumno}', [AlumnoController::class, 'estudiante_show'])->name('alumno.estudiante_show');
        Route::post('estudiante', [AlumnoController::class, 'estudiante_store'])->name('alumno.estudiante_store');
        Route::patch('estudiante/{alumno}', [AlumnoController::class, 'estudiante_update'])->name('alumno.estudiante_update');
        Route::put('estudiante/{alumno}', [AlumnoController::class, 'estudiante_update'])->name('alumno.estudiante_update');
        Route::get('/estudiante/success', [HomeController::class, 'estudiante_index'])->name('success');
    });

});

//esta sección contiene las rutas asociadas a Laravel Excel
Route::get('informes/alumnos/export', [AlumnoController::class, 'export'])->name('ExportAllAlumnos');
Route::get('informes/proyectos/export', [ProyectoController::class, 'export'])->name('ExportAllProyectos');
Route::post('informes/alumnos/import', [AlumnoController::class, 'import'])->name('ImportAlumnos');
Route::post('informes/proyectos/import', [ProyectoController::class, 'import'])->name('ImportProyectos');

