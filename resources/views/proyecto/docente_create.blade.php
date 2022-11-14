@extends('layouts.app') 

@section('template_title')
    Ingrese nuevo proyecto a continuación.
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Ingrese nuevo proyecto a continuación.</span>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('proyecto.docente_index') }}"> Cancelar</a>
                        </div>
                    </div>
                    
                    <div class="card-body">
                        <form method="POST" action="{{ route('proyecto.docente_store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('proyecto.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
