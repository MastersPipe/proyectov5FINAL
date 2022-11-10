@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    {{ __('Bienvenido al sistema de gestión de asignaturas de titulación de la EIE.') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
