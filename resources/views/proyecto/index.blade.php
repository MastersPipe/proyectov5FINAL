@extends('layouts.app')
 
@section('template_title')
    Proyecto
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
					<form action="informes/proyectos/import" method="post" enctype="multipart/form-data">
						@csrf
						<div class="form-group">
							<input type="file" name="lista-proyectos"/>
							<button type="submit" class="btn btn-primary"> Importar</button>
						</div>
					</form>
					<div class="text-end">
	
						<a class="btn btn-primary btn-sm" href="{{ route('ExportAllProyectos') }}" ><i class="fa fa-fw fa-edit"></i>Exportar lista completa a Excel</a>
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
                                {{ __('Lista actual de proyectos.') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('proyectos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
										<th>Nombre de Empresa</th>
										<th>Tipo</th>
										<th>Nuevo/antiguo</th>
										<th>Asociación</th>
										<th>Título del Proyecto</th>
										<th>Área</th>
										<th>Resumen</th>
										<th>Objetivo General</th>
										<th>Objetivo Especifico</th>
										<th>Financiamiento</th>
										<th>Impacto Social</th>
										<th>Lugar Impacto Social</th>
										<th>Razón Impacto Social</th>
										<th>Vinculación Empresa</th>
										<th>Lugar Vinculación Empresa</th>
										<th>Razón Vinculación Empresa</th>
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
                                            <td>{{ ++$i }}</td>
											
											<td>{{ $proyecto->Semestre }}</td>
											<td>{{ $proyecto->RutProfesorGuia }}</td>
											<td>{{ $proyecto->NombresProfesorGuia }}</td>
											<td>{{ $proyecto->ApellidosProfesorGuia }}</td>											
											<td>{{ $proyecto->Correo }}</td>
											<td>{{ $proyecto->RutProfesorCorref }}</td>
											<td>{{ $proyecto->NombresProfesorCorref }}</td>
											<td>{{ $proyecto->ApellidosProfesorCorref }}</td>
											<td>{{ $proyecto->NombreEmpresa }}</td>
											<td>{{ $proyecto->Tipo }}</td>
											<td>{{ $proyecto->NuevoAntiguo }}</td>
											<td>{{ $proyecto->Asociacion }}</td>
											<td>{{ $proyecto->TituloTema }}</td>
											<td>{{ $proyecto->Area }}</td>
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
                                                <form action="{{ route('proyectos.destroy',$proyecto->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('proyectos.show',$proyecto->id) }}"><i class="fa fa-fw fa-eye"></i> Detalles</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('proyectos.edit',$proyecto->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
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
        
                            <a class="btn btn-primary btn-sm" href="{{ route('ExportAllProyectos') }}" ><i class="fa fa-fw fa-edit"></i>Exportar lista completa a Excel</a>
                            </div>
                        </div>
                    </div>
                </div>
                {!! $proyectos->links() !!}
            </div>
        </div>
    </div>
@endsection
