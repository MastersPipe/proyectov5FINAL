@extends('layouts.app')

@section('content')
<div class="container">

    @if(Session::has('mensaje'))
    <div class="alert alert-success alert-dismissible" role="alert">

    {{Session::get('mensaje')}}

        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times; </span>
        </button>
    </div>
    @endif
    



<a href="{{url('test/create')}}" class="btn btn-success"> Registrar nueva entrada</a>
<br>
<br>

<table class="table table-light">

    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Nombre</th>
            <th>Apellido Paterno</th>
            <th>Apellido Materno</th>
            <th>Rut</th>
            <th>Correo</th>
            <th>Año de Ingreso</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($sistema_inscripciones as $consulta)
        <tr>
            <td>{{$consulta->id}}</td>
            <td>{{$consulta->Nombre}}</td>
            <td>{{$consulta->ApellidoPaterno}}</td>
            <td>{{$consulta->ApellidoMaterno}}</td>
            <td>{{$consulta->Rut}}</td>
            <td>{{$consulta->Correo}}</td>
            <td>{{$consulta->AñoDeIngreso}}</td>
            <td>

            <a href="{{url('/test/'.$consulta->id.'/edit') }}" class="btn btn-warning">
                Editar
            </a>

            <form action="{{url('test/'.$consulta->id)}}" class="d-inline" method="post">
            @csrf
            {{method_field('DELETE')}}
            <input class="btn btn-danger" type="submit" onclick="return confirm('¿Quieres borrar el registro?')"
             value="Borrar">

            </form>

            </td>

        </tr>
        @endforeach
    </tbody>
</table>
{!!$sistema_inscripciones->links() !!}

</div>
@endsection