<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Alumno
 *
 * @property $id
 * @property $Semestre
 * @property $ApellidoPaterno
 * @property $ApellidoMaterno
 * @property $Nombres
 * @property $Rut
 * @property $Correo
 * @property $Telefono
 * @property $EstadoPractica
 * @property $DuracionPractica
 * @property $SinPractica
 * @property $CargaAcademica
 * @property $Carrera
 * @property $AñoIngreso
 * @property $Malla
 * @property $ClaveCurso
 * @property $Paralelo
 * @property $NombreCurso
 * @property $TituloProyecto
 * @property $ProfesorGuia
 * @property $Correferente
 * @property $Comentarios
 * @property $EstadoAutorizacion
 * @property $EstadoInscripcion
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Alumno extends Model
{
    //esta sección establece qué campos del formulario son obligatorios
    static $rules = [
		'Semestre' => 'required',
		'ApellidoPaterno' => 'required',
		'ApellidoMaterno' => 'required',
		'Nombres' => 'required',
		'Rut' => 'required',
		'Correo' => 'required|email',
		'Telefono' => 'required',
		'EstadoPractica' => 'required',
		'DuracionPractica' => 'required',
		'SinPractica' => 'required',
		'CargaAcademica' => 'required',
		'Carrera' => 'required',
		'AñoIngreso' => 'required|numeric',
		'Malla' => 'required',
		'ClaveCurso' => 'required',
		'Paralelo' => 'required|numeric',
		'NombreCurso' => 'required',
		'TituloProyecto' => 'required',
		'ProfesorGuia' => 'required',
		'Correferente' => 'required',
		'Comentarios' => 'required',
		//'EstadoAutorizacion' => 'required',
		//'EstadoInscripcion' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
	//esta sección establece qué campos del formulario son rellenables por el usuario
    protected $fillable = ['Semestre','ApellidoPaterno','ApellidoMaterno','Nombres','Rut','Correo','Telefono','EstadoPractica','DuracionPractica','SinPractica','CargaAcademica','Carrera','AñoIngreso','Malla','ClaveCurso','Paralelo','NombreCurso','TituloProyecto','ProfesorGuia','Correferente','Comentarios','EstadoAutorizacion','EstadoInscripcion'];



}
