<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Proyecto
 *
 * @property $id
 * @property $Semestre
 * @property $RutProfesorGuia
 * @property $NombresProfesorGuia
 * @property $ApellidosProfesorGuia
 * @property $CorreoProfesorGuia
 * @property $RutProfesorCorref
 * @property $NombresProfesorCorref
 * @property $ApellidosProfesorCorref
 * @property $CorreoProfesorCorref
 * @property $NombreEmpresa
 * @property $Pago
 * @property $TituloTema
 * @property $Tipo
 * @property $Area1
 * @property $Area2
 * @property $Resumen
 * @property $ObjetivoGeneral
 * @property $ObjetivoEspecifico
 * @property $Financiamiento
 * @property $ImpactoSocial
 * @property $LugarIS
 * @property $RazonIS
 * @property $VinculacionEmpresa
 * @property $LugarVE
 * @property $RazonVE
 * @property $Apoyo
 * @property $EstadoAutorizacion
 * @property $EstadoReserva
 * @property $RutAlumno1
 * @property $NombreAlumno1
 * @property $CarreraAlumno1
 * @property $RutAlumno2
 * @property $NombreAlumno2
 * @property $CarreraAlumno2
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Proyecto extends Model
{
    
    static $rules = [
		'Semestre' => 'required',
		'RutProfesorGuia' => 'required',
		'NombresProfesorGuia' => 'required',
		'ApellidosProfesorGuia' => 'required',
		'CorreoProfesorGuia' => 'required|email',
		'RutProfesorCorref' => 'required',
		'NombresProfesorCorref' => 'required',
		'ApellidosProfesorCorref' => 'required',
		'CorreoProfesorCorref' => 'required|email',
		'NombreEmpresa' => 'required',
		'Pago' => 'required',
		'TituloTema' => 'required',
		'Tipo' => 'required',
		'Area1' => 'required',
		//'Area2' => 'required',
		'Resumen' => 'required',
		'ObjetivoGeneral' => 'required',
		'ObjetivoEspecifico' => 'required',
		'Financiamiento' => 'required',
		'ImpactoSocial' => 'required',
		//'LugarIS' => 'required',
		//'RazonIS' => 'required',
		'VinculacionEmpresa' => 'required',
		//'LugarVE' => 'required',
		//'RazonVE' => 'required',
		'Apoyo' => 'required',
		//'EstadoAutorizacion' => 'required',
		//'EstadoReserva' => 'required',
		//'RutAlumno1' => 'required',
		//'NombreAlumno1' => 'required',
		//'CarreraAlumno1' => 'required',
		//'RutAlumno2' => 'required',
		//'NombreAlumno2' => 'required',
		//'CarreraAlumno2' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Semestre','RutProfesorGuia','NombresProfesorGuia','ApellidosProfesorGuia','CorreoProfesorGuia','RutProfesorCorref','NombresProfesorCorref','ApellidosProfesorCorref','CorreoProfesorCorref','NombreEmpresa','Pago','TituloTema','Tipo','Area1','Area2','Resumen','ObjetivoGeneral','ObjetivoEspecifico','Financiamiento','ImpactoSocial','LugarIS','RazonIS','VinculacionEmpresa','LugarVE','RazonVE','Apoyo','EstadoAutorizacion','EstadoReserva','RutAlumno1','NombreAlumno1','CarreraAlumno1','RutAlumno2','NombreAlumno2','CarreraAlumno2'];



}
