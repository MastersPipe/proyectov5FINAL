@extends('layouts.app')

@section('template_title')
    Usuario
@endsection

@php
//dump($users);
$data = [];
foreach ($users as $user) {
    array_push($data, $user);
}
//dump($data);
$collection = collect($data);
$total = $collection->count('role');
$counted = $collection->countBy('role');
//dump($counted);
//echo ($counted["Alumno"]);
@endphp

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                    <th>Actualmente la base de datos registra un total de {{($total)}} personas, de las cuales:</th><br>
                    <th>{{($counted["Alumno"]) ?? '0'}} son alumnos, {{($counted["Docente"]) ?? '0'}} son docentes y {{($counted["Admin"]) ?? '0'}} son administradores.</th>
                    </div>
                </div><br>

                <div class="card"> 
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Lista actual de usuarios registrados') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('users.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Ingresar nuevo usuario') }}
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
                                        <th>Rol</th>
										<th>Nombre</th>
										<th>Correo</th>
                                        <th>Fecha de creaci??n</th>
                                        <th>Fecha de modificaci??n</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $user)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            <td>{{ $user->role }}</td>
											<td>{{ $user->name }}</td>
											<td>{{ $user->email }}</td>
                                            <td>{{ $user->created_at }}</td>
                                            <td>{{ $user->updated_at }}</td>
                                            <td>
                                                <form action="{{ route('users.destroy',$user->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('users.show',$user->id) }}"><i class="fa fa-fw fa-eye"></i> Detalles</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('users.edit',$user->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
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
                </div>
                {!! $users->links() !!}
            </div>
        </div>
    </div>

    
@endsection

