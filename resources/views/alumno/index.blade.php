@extends('layouts.app')

@section('template_title')
    Alumno
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">{{ __('Importar/Exportar archivos Excel') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form action="informes/alumnos/import" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <input type="file" name="lista-alumnos"/>
                            <button type="submit" class="btn btn-primary"> Importar</button>
                        </div>
                    </form>
                    <div class="text-end">
    
                        <a class="btn btn-primary btn-sm" href="{{ route('ExportAllAlumnos') }}" ><i class="fa fa-fw fa-edit"></i>Exportar lista completa a Excel</a>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>


    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Lista actual de alumnos candidatos.') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('alumnos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Ingresar nuevo alumno.') }}
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
										<th>Apellido Paterno</th>
										<th>Apellido Materno</th>
										<th>Nombres</th>
										<th>Rut</th>
										<th>Correo</th>
										<th>Teléfono</th>
										<th>¿Hizo la práctica?</th>
										<th>Duración</th>
										<th>Si no la tiene, explique el por qué</th>
										<th>Carga Académica de este semestre</th>
										<th>Carrera</th>
										<th>Año de Ingreso</th>
										<th>Malla</th>
										<th>Clave del Curso de Titulación</th>
										<th>Paralelo</th>
										<th>Nombre del Curso de Titulación</th>
										<th>Titulo del Proyecto</th>
										<th>Profesor Guía</th>
										<th>Profesor Correferente</th>
										<th>Comentarios</th>
                                        <th>Estado de Autorización</th>
                                        <th>Estado de Inscripción</th>
                                        <th>Fecha de creación</th>
                                        <th>Fecha de modificación</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($alumnos as $alumno)
                                        <tr>

                                            <td>{{ $alumno->id }}</td>
                                            <td>{{ $alumno->Semestre }}</td>
											<td>{{ $alumno->ApellidoPaterno }}</td>
											<td>{{ $alumno->ApellidoMaterno }}</td>
											<td>{{ $alumno->Nombres }}</td>
											<td>{{ $alumno->Rut }}</td>
											<td>{{ $alumno->Correo }}</td>
											<td>{{ $alumno->Telefono }}</td>
											<td>{{ $alumno->EstadoPractica }}</td>
											<td>{{ $alumno->DuracionPractica }}</td>
											<td>{{ $alumno->SinPractica }}</td>
											<td>{{ $alumno->CargaAcademica }}</td>
											<td>{{ $alumno->Carrera }}</td>
											<td>{{ $alumno->AñoIngreso }}</td>
											<td>{{ $alumno->Malla }}</td>
											<td>{{ $alumno->ClaveCurso }}</td>
											<td>{{ $alumno->Paralelo }}</td>
											<td>{{ $alumno->NombreCurso }}</td>
											<td>{{ $alumno->TituloProyecto }}</td>
											<td>{{ $alumno->ProfesorGuia }}</td>
											<td>{{ $alumno->Correferente }}</td>
											<td>{{ $alumno->Comentarios }}</td>
                                            <td>{{ $alumno->EstadoAutorizacion }}</td>
											<td>{{ $alumno->EstadoInscripcion }}</td>
                                            <td>{{ $alumno->created_at }}</td>
											<td>{{ $alumno->updated_at }}</td>

                                            <td>
                                                <form action="{{ route('alumnos.destroy',$alumno->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('alumnos.show',$alumno->id) }}"><i class="fa fa-fw fa-eye"></i> Detalles</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('alumnos.edit',$alumno->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Borrar</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="container: flex; justify-content: space-between; align-items: right;">
                            <div class="text-end">
        
                            <a class="btn btn-primary btn-sm" href="{{ route('ExportAllAlumnos') }}" ><i class="fa fa-fw fa-edit"></i>Exportar lista completa a Excel</a>
                            </div>
                        </div>
                    </div>
                </div>
                {!! $alumnos->links() !!}
            </div>
        </div>
    </div>

    

@endsection

