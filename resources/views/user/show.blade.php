@extends('layouts.app')

@section('template_title')
    {{ $user->name ?? 'Show User' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Detalles de usuario registrado</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('users.index') }}"> Volver</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong><br>Rol:<br></strong>
                            {{ $user->role }}
                        </div>
                        <div class="form-group">
                            <strong><br>Nombre:<br></strong>
                            {{ $user->name }}
                        </div>
                        <div class="form-group">
                            <strong><br>Correo:<br></strong>
                            {{ $user->email }}
                        </div>
                        <div class="form-group">
                            <strong><br>Fecha de creación:<br></strong>
                            {{ $user->created_at }}
                        </div>
                        <div class="form-group">
                            <strong><br>Fecha de modificación:<br></strong>
                            {{ $user->updated_at }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
