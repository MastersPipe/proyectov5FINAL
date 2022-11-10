@extends('layouts.app')

@section('template_title')
    Alumno
@endsection

@foreach ($alumnos as $alumno)

    <a class="invisible">{{ ++$i }}</a>
    <a class="invisible">{{ $alumno->Correo }}</a>

    @if (Auth::user()->email == ($alumno-> Correo))
        @section('content')
        <section class="content container-fluid">
            <div class="">
                <div class="col-md-12">

                    @includeif('partials.errors')

                    <div class="card card-default">
                        <div class="card-header">
                            <span class="card-title">Modifique los datos a continuación.</span>
                            <div class="float-right">
                                <a class="btn btn-primary" href="{{ route('alumnos.alumno_index') }}"> Cancelar</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="{{ route('alumnos.update', $alumno->id) }}"  role="form" enctype="multipart/form-data">
                                {{ method_field('PATCH') }}
                                @csrf

                                @include('alumno.form')

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @endsection
    @endif
    @section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Complete el formulario de postulación a procesos de titulación a continuación.</span>

                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('alumnos.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('alumno.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endsection
@endforeach


