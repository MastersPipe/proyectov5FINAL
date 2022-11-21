@extends('layouts.app')
 
@section('template_title')
    Proyecto
@endsection

@section('content')

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Lista actual de proyectos.') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('proyecto.docente_create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Ingresar nuevo proyecto.') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
										<th>Semestre Actual</th>
										<th>Rut Profesor Guía</th>
										<th>Nombres Profesor Guía</th>
										<th>Apellidos Profesor Guía</th>
										<th>Correo Profesor Guía</th>
										<th>Rut Profesor Correferente</th>
										<th>Nombres Profesor Correferente</th>
										<th>Apellidos Profesor Correferente</th>
										<th>Correo Profesor Correferente</th>
										<th>Nombre de Empresa</th>
										<th>¿Corresponde pago a empresa?</th>
										<th>Título del Proyecto</th>
										<th>¿Individual o grupal?</th>
										<th>Área afín 1</th>
										<th>Área afín 2</th>
										<th>Resumen de proyecto</th>
										<th>Objetivo General</th>
										<th>Objetivos Especificos</th>
										<th>Financiamiento</th>
										<th>¿Impacto Social?</th>
										<th>Lugar Impacto Social</th>
										<th>Razón Impacto Social</th>
										<th>¿Vinculación con Empresa?</th>
										<th>Lugar Vinculación Empresa</th>
										<th>Razón Vinculación Empresa</th>
										<th>¿Apoyo lab. de máquinas?</th>
										<th>Estado de Autorización</th>
										<th>Estado de Reserva</th>
										<th>Rut Alumno 1</th>
										<th>Nombre Alumno 1</th>
										<th>Carrera Alumno 1</th>
										<th>Rut Alumno 2</th>
										<th>Nombre Alumno 2</th>
										<th>Carrera Alumno 2</th>
										<th>Fecha de creación</th>
                                        <th>Fecha de modificación</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($proyectos as $proyecto)
                                        <tr>
											@php
                                            //este comando compara el correo de la sesión activa con la base de datos para filtrar resultados
                                            @endphp
                                            @if ($proyecto->CorreoProfesorGuia == Auth::user()->email)     
                                            
											<td>{{ $proyecto->id }}</td>
											<td>{{ $proyecto->Semestre }}</td>
											<td>{{ $proyecto->RutProfesorGuia }}</td>
											<td>{{ $proyecto->NombresProfesorGuia }}</td>
											<td>{{ $proyecto->ApellidosProfesorGuia }}</td>
											<td>{{ $proyecto->CorreoProfesorGuia }}</td>
											<td>{{ $proyecto->RutProfesorCorref }}</td>
											<td>{{ $proyecto->NombresProfesorCorref }}</td>
											<td>{{ $proyecto->ApellidosProfesorCorref }}</td>
											<td>{{ $proyecto->CorreoProfesorCorref }}</td>
											<td>{{ $proyecto->NombreEmpresa }}</td>
											<td>{{ $proyecto->Pago }}</td>
											<td>{{ $proyecto->TituloTema }}</td>
											<td>{{ $proyecto->Tipo }}</td>
											<td>{{ $proyecto->Area1 }}</td>
											<td>{{ $proyecto->Area2 }}</td>
											<td>{{ $proyecto->Resumen }}</td>
											<td>{{ $proyecto->ObjetivoGeneral }}</td>
											<td>{{ $proyecto->ObjetivoEspecifico }}</td>
											<td>{{ $proyecto->Financiamiento }}</td>
											<td>{{ $proyecto->ImpactoSocial }}</td>
											<td>{{ $proyecto->LugarIS }}</td>
											<td>{{ $proyecto->RazonIS }}</td>
											<td>{{ $proyecto->VinculacionEmpresa }}</td>
											<td>{{ $proyecto->LugarVE }}</td>
											<td>{{ $proyecto->RazonVE }}</td>
											<td>{{ $proyecto->Apoyo }}</td>
											<td>{{ $proyecto->EstadoAutorizacion }}</td>
											<td>{{ $proyecto->EstadoReserva }}</td>
											<td>{{ $proyecto->RutAlumno1 }}</td>
											<td>{{ $proyecto->NombreAlumno1 }}</td>
											<td>{{ $proyecto->CarreraAlumno1 }}</td>
											<td>{{ $proyecto->RutAlumno2 }}</td>
											<td>{{ $proyecto->NombreAlumno2 }}</td>
											<td>{{ $proyecto->CarreraAlumno2 }}</td>
											<td>{{ $proyecto->created_at }}</td>
											<td>{{ $proyecto->updated_at }}</td>

                                            <td>
                                                    <a class="btn btn-sm btn-primary " href="{{ route('proyecto.docente_show',$proyecto->id) }}"><i class="fa fa-fw fa-eye"></i> Detalles</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('proyecto.docente_edit',$proyecto->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
                                                    @csrf

                                            </td>
                                        </tr>
										@endif
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
                {!! $proyectos->links() !!}
            </div>
        </div>
    </div>
@endsection
