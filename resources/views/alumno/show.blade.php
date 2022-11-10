@extends('layouts.app')

@section('template_title')
    {{ $alumno->name ?? 'Show Alumno' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Detalles del alumno.</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('alumnos.index') }}"> Volver</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <strong><br>Semestre actual: <br></strong>
                            {{ $alumno->Semestre ?? 'error'}}
                        </div>
                        <div class="form-group">
                            <strong><br>Apellido Paterno: <br></strong>
                            {{ $alumno->ApellidoPaterno ?? 'error'}}
                        </div>
                        <div class="form-group">
                            <strong><br>Apellido Materno: <br></strong>
                            {{ $alumno->ApellidoMaterno ?? 'error'}}
                        </div>
                        <div class="form-group">
                            <strong><br>Nombres: <br></strong>
                            {{ $alumno->Nombres ?? 'error'}}
                        </div>
                        <div class="form-group">
                            <strong><br>Rut: <br></strong>
                            {{ $alumno->Rut ?? 'error'}}
                        </div>
                        <div class="form-group">
                            <strong><br>Correo: <br></strong>
                            {{ $alumno->Correo ?? 'error'}}
                        </div>
                        <div class="form-group">
                            <strong><br>Teléfono: <br></strong>
                            {{ $alumno->Telefono ?? 'error'}}
                        </div>
                        <div class="form-group">
                            <strong><br>¿Hizo la práctica?: <br></strong>
                            {{ $alumno->EstadoPractica ?? 'error'}}
                        </div>
                        <div class="form-group">
                            <strong><br>Duración: <br></strong>
                            {{ $alumno->DuracionPractica ?? 'error'}}
                        </div>
                        <div class="form-group">
                            <strong><br>Si no la tiene, explique el por qué: <br></strong>
                            {{ $alumno->SinPractica ?? 'error'}}
                        </div>
                        <div class="form-group">
                            <strong><br>Carga Académica de este semestre: <br></strong>
                            {{ $alumno->CargaAcademica ?? 'error'}}
                        </div>
                        <div class="form-group">
                            <strong><br>Carrera: <br></strong>
                            {{ $alumno->Carrera ?? 'error'}}
                        </div>
                        <div class="form-group">
                            <strong><br>Año de Ingreso: <br></strong>
                            {{ $alumno->AñoIngreso ?? 'error'}}
                        </div>
                        <div class="form-group">
                            <strong><br>Malla:</strong>
                            {{ $alumno->Malla ?? 'error'}}
                        </div>
                        <div class="form-group">
                            <strong><br>Clave del Curso de titulación: <br></strong>
                            {{ $alumno->ClaveCurso ?? 'error'}}
                        </div>
                        <div class="form-group">
                            <strong><br>Paralelo: <br></strong>
                            {{ $alumno->Paralelo ?? 'error'}}
                        </div>
                        <div class="form-group">
                            <strong><br>Nombre del Curso de Titulación: <br></strong>
                            {{ $alumno->NombreCurso ?? 'error'}}
                        </div>
                        <div class="form-group">
                            <strong><br>Título del Proyecto: <br></strong>
                            {{ $alumno->TituloProyecto ?? 'error'}}
                        </div>
                        <div class="form-group">
                            <strong><br>Profesor Guía: <br></strong>
                            {{ $alumno->ProfesorGuia ?? 'error'}}
                        </div>
                        <div class="form-group">
                            <strong><br>Profesor Correferente: <br></strong>
                            {{ $alumno->Correferente ?? 'error'}}
                        </div>
                        <div class="form-group">
                            <strong><br>Comentarios: <br></strong>
                            {{ $alumno->Comentarios ?? 'error'}}
                        </div>
                        <div class="form-group">
                            <strong><br>Apellido Paterno: <br></strong>
                            {{ $alumno->ApellidoPaterno ?? 'error'}}
                        </div>
                        <div class="form-group">
                            <strong><br>Estado actual de la autorización para inscribir la asignatura: <br></strong>
                            {{ $alumno->EstadoAutorizacion ?? 'error'}}
                        </div>
                        <div class="form-group">
                            <strong><br>Estado actual de la inscripción de la asignatura: <br></strong>
                            {{ $alumno->EstadoInscripcion ?? 'error'}}
                        </div>
                        <div class="form-group">
                            <strong><br>Fecha de creación: <br></strong>
                            {{ $alumno->created_at ?? 'error'}}
                        </div>
                        <div class="form-group">
                            <strong><br>Fecha de modificación: <br></strong>
                            {{ $alumno->updated_at ?? 'error'}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
