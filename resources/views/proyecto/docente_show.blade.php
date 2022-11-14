@extends('layouts.app')

@section('template_title') 
    {{ $proyecto->name ?? 'Show Proyecto' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Detalles del Proyecto</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('proyecto.docente_index') }}"> Volver</a>
                        </div>
                    </div>

                    <div class="card-body">
                            <div class="form-group">
                                <strong><br>Semestre actual: <br></strong>
                                {{ $proyecto->Semestre ?? 'error'}}
                            </div>

                        <br><div class="card-header">{{  ('Información docentes:') }}</div><br>
                            <div class="form-group">
                                <strong>Rut Profesor Guía: <br></strong>
                                {{ $proyecto->RutProfesorGuia ?? 'error'}}
                            </div>
                            <div class="form-group">
                                <strong><br>Nombres Profesor Guía: <br></strong>
                                {{ $proyecto->NombresProfesorGuia ?? 'error'}}
                            </div>
                            <div class="form-group">
                                <strong><br>Apellidos Profesor Guía: <br></strong>
                                {{ $proyecto->ApellidosProfesorGuia ?? 'error'}}
                            </div>
                            <div class="form-group">
                                <strong><br>Correo Profesor Guía: <br></strong>
                                {{ $proyecto->CorreoProfesorGuia ?? 'error'}}
                            </div>
                            <div class="form-group">
                                <strong><br>Rut Profesor Correferente: <br></strong>
                                {{ $proyecto->RutProfesorCorref ?? 'error'}}
                            </div>
                            <div class="form-group">
                                <strong><br>Nombres Profesor Correferente: <br></strong>
                                {{ $proyecto->NombresProfesorCorref ?? 'error'}}
                            </div>
                            <div class="form-group">
                                <strong><br>Apellidos Profesor Correferente: <br></strong>
                                {{ $proyecto->ApellidosProfesorCorref ?? 'error'}}
                            </div>
                            <div class="form-group">
                                <strong><br>Correo Profesor Correferente: <br></strong>
                                {{ $proyecto->CorreoProfesorCorref ?? 'error'}}
                            </div>
                            <div class="form-group">
                                <strong><br>Nombre de Empresa: <br></strong>
                                {{ $proyecto->NombreEmpresa ?? 'error'}}
                            </div>
                            <div class="form-group">
                                <strong><br>¿Corresponde pago a profesor correfente?: <br></strong>
                                {{ $proyecto->Pago ?? 'error'}}
                            </div>

                        <br><div class="card-header">{{  ('Información docentes:') }}</div><br>
                            <div class="form-group">
                                <strong>Título del Proyecto: <br></strong>
                                {{ $proyecto->TituloTema ?? 'error'}}
                            </div>
                            <div class="form-group">
                                <strong><br>¿Individual o grupal?: <br></strong>
                                {{ $proyecto->Tipo ?? 'error'}}
                            </div>
                            <div class="form-group">
                                <strong><br>Área Afín 1: <br></strong>
                                {{ $proyecto->Area1 ?? 'error'}}
                            </div>
                            <div class="form-group">
                                <strong><br>Área Afín 2 si aplica: <br></strong>
                                {{ $proyecto->Area2 ?? 'error'}}
                            </div>
                            <div class="form-group">
                                <strong><br>Resumen del proyecto: <br></strong>
                                {{ $proyecto->Resumen ?? 'error'}}
                            </div>
                            <div class="form-group">
                                <strong><br>Objetivo General: <br></strong>
                                {{ $proyecto->ObjetivoGeneral ?? 'error'}}
                            </div>
                            <div class="form-group">
                                <strong><br>Objetivo Específico: <br></strong>
                                {{ $proyecto->ObjetivoEspecifico ?? 'error'}}
                            </div>

                        <br><div class="card-header">{{  ('Financiamiento:') }}</div><br>
                            <div class="form-group">
                                <strong>Financiamiento: <br></strong>
                                {{ $proyecto->Financiamiento ?? 'error'}}
                            </div>

                        <br><div class="card-header">{{  ('Vinculación:') }}</div><br>
                            <div class="form-group">
                                <strong>¿El proyecto tiene algún impacto o vinculación social?: <br></strong>
                                {{ $proyecto->ImpactoSocial ?? 'error'}}
                            </div>
                            <div class="form-group">
                                <strong><br>Lugar Impacto Social: <br></strong>
                                {{ $proyecto->LugarIS ?? 'error'}}
                            </div>
                            <div class="form-group">
                                <strong><br>Razón Impacto Social: <br></strong>
                                {{ $proyecto->RazonIS ?? 'error'}}
                            </div>
                            <div class="form-group">
                                <strong><br>¿El proyecto tiene alguna vinculación con empresa?: <br></strong>
                                {{ $proyecto->VinculacionEmpresa ?? 'error'}}
                            </div>
                            <div class="form-group">
                                <strong><br>Lugar Vinculación Empresa: <br></strong>
                                {{ $proyecto->LugarVE ?? 'error'}}
                            </div>
                            <div class="form-group">
                                <strong><br>Razón Vinculación Empresa: <br></strong>
                                {{ $proyecto->RazonVE ?? 'error'}}
                            </div>
                            <div class="form-group">
                                <strong><br>¿Para la realización del proyecto ¿requiere apoyo de taller electromecánico de la EIE?: <br></strong>
                                {{ $proyecto->Apoyo ?? 'error'}}
                            </div>

                        <br><div class="card-header">{{  ('Alumnos:') }}</div><br>
                            <div class="form-group">
                                <strong>Estado de Autorización: <br></strong>
                                {{ $proyecto->EstadoAutorizacion ?? 'error'}}
                            </div>
                            <div class="form-group">
                                <strong><br>Estado de Reserva: <br></strong>
                                {{ $proyecto->EstadoReserva ?? 'error'}}
                            </div>
                            <div class="form-group">
                                <strong><br>Rut Alumno 1: <br></strong>
                                {{ $proyecto->RutAlumno1 ?? 'error'}}
                            </div>
                            <div class="form-group">
                                <strong><br>Nombre Alumno 1: <br></strong>
                                {{ $proyecto->NombreAlumno1 ?? 'error'}}
                            </div>
                            <div class="form-group">
                                <strong><br>Carrera Alumno 1: <br></strong>
                                {{ $proyecto->CarreraAlumno1 ?? 'error'}}
                            </div>
                            <div class="form-group">
                                <strong><br>Rut Alumno 2: <br></strong>
                                {{ $proyecto->RutAlumno2 ?? 'error'}}
                            </div>
                            <div class="form-group">
                                <strong><br>Nombre Alumno 2: <br></strong>
                                {{ $proyecto->NombreAlumno2 ?? 'error'}}
                            </div>
                            <div class="form-group">
                                <strong><br>Carrera Alumno 2: <br></strong>
                                {{ $proyecto->CarreraAlumno2 ?? 'error'}}
                            </div>
                            <div class="form-group">
                                <strong><br>Fecha de creación: <br></strong>
                                {{ $proyecto->created_at ?? 'error'}}
                            </div>
                            <div class="form-group">
                                <strong><br>Fecha de modificación: <br></strong>
                                {{ $proyecto->updated_at ?? 'error'}}
                            </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
