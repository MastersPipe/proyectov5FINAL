<div class="box box-info padding-1"> 
    <div class="box-body">
        <input type="hidden" id="A" value="{{$proyecto->Semestre}}" >
        <input type="hidden" id="B" value="{{$proyecto->Pago}}" >
        <input type="hidden" id="C" value="{{$proyecto->Tipo}}" >
        <input type="hidden" id="D" value="{{$proyecto->Area1}}" >
        <input type="hidden" id="E" value="{{$proyecto->Area2}}" >
        <input type="hidden" id="F" value="{{$proyecto->Financiamiento}}" >
        <input type="hidden" id="G" value="{{$proyecto->ImpactoSocial}}" >
        <input type="hidden" id="H" value="{{$proyecto->VinculacionEmpresa}}" >
        <input type="hidden" id="I" value="{{$proyecto->Apoyo}}" >
        <input type="hidden" id="J" value="{{$proyecto->EstadoAutorizacion}}" >
        <input type="hidden" id="K" value="{{$proyecto->EstadoReserva}}" >

        <div class="form-group">
            {{ Form::label('Semestre Actual') }} <br>
            <select name="Semestre" id="Semestre">
            <option value="2S2022">Segundo Semestre 2022</option>
            <option value="1S2023">Primer Semestre 2023</option>
            <option value="2S2023">Segundo Semestre 2023</option>
            <option value="1S2024">Primer Semestre 2024</option>
            <option value="2S2024">Segundo Semestre 2024</option>
            <option value="1S2025">Primer Semestre 2025</option>
            <option value="2S2025">Segundo Semestre 2025</option>
            <option value="1S2026">Primer Semestre 2026</option>
            <option value="2S2026">Segundo Semestre 2026</option>
            <option value="1S2027">Primer Semestre 2027</option>
            <option value="2S2027">Segundo Semestre 2027</option>
            <option value="1S2028">Primer Semestre 2028</option>
            <option value="2S2028">Segundo Semestre 2028</option>
            </select>
            {!! $errors->first('Semestre', '<div class="invalid-feedback">:message</div>') !!}
        </div>

        <br><div class="card-header">{{  ('Información docentes:') }}</div><br>
        <div class="card-body">
            <div class="form-group">
                {{ Form::label('Rut Profesor Guía') }}
                {{ Form::text('RutProfesorGuia', $proyecto->RutProfesorGuia, ['class' => 'form-control' . ($errors->has('RutProfesorGuia') ? ' is-invalid' : ''), 'placeholder' => '']) }}
                {!! $errors->first('RutProfesorGuia', '<div class="invalid-feedback">:message</div>') !!}
            </div>
            <div class="form-group">
                {{ Form::label('Nombres Profesor Guía') }}
                {{ Form::text('NombresProfesorGuia', $proyecto->NombresProfesorGuia, ['class' => 'form-control' . ($errors->has('NombresProfesorGuia') ? ' is-invalid' : ''), 'placeholder' => '']) }}
                {!! $errors->first('NombresProfesorGuia', '<div class="invalid-feedback">:message</div>') !!}
            </div>
            <div class="form-group">
                {{ Form::label('Apellidos Profesor Guía') }}
                {{ Form::text('ApellidosProfesorGuia', $proyecto->ApellidosProfesorGuia, ['class' => 'form-control' . ($errors->has('ApellidosProfesorGuia') ? ' is-invalid' : ''), 'placeholder' => '']) }}
                {!! $errors->first('ApellidosProfesorGuia', '<div class="invalid-feedback">:message</div>') !!}
            </div>
            <div class="form-group">
                {{ Form::label('Correo Profesor Guía') }}
                {{ Form::text('CorreoProfesorGuia', $proyecto->CorreoProfesorGuia, ['class' => 'form-control' . ($errors->has('CorreoProfesorGuia') ? ' is-invalid' : ''), 'placeholder' => '']) }}
                {!! $errors->first('CorreoProfesorGuia', '<div class="invalid-feedback">:message</div>') !!}
            </div>
            <div class="form-group">
                {{ Form::label('Rut Profesor Correferente') }}
                {{ Form::text('RutProfesorCorref', $proyecto->RutProfesorCorref, ['class' => 'form-control' . ($errors->has('RutProfesorCorref') ? ' is-invalid' : ''), 'placeholder' => '']) }}
                {!! $errors->first('RutProfesorCorref', '<div class="invalid-feedback">:message</div>') !!}
            </div>
            <div class="form-group">
                {{ Form::label('Nombres Profesor Correferente') }}
                {{ Form::text('NombresProfesorCorref', $proyecto->NombresProfesorCorref, ['class' => 'form-control' . ($errors->has('NombresProfesorCorref') ? ' is-invalid' : ''), 'placeholder' => '']) }}
                {!! $errors->first('NombresProfesorCorref', '<div class="invalid-feedback">:message</div>') !!}
            </div>
            <div class="form-group">
                {{ Form::label('Apellidos Profesor Correferente') }}
                {{ Form::text('ApellidosProfesorCorref', $proyecto->ApellidosProfesorCorref, ['class' => 'form-control' . ($errors->has('ApellidosProfesorCorref') ? ' is-invalid' : ''), 'placeholder' => '']) }}
                {!! $errors->first('ApellidosProfesorCorref', '<div class="invalid-feedback">:message</div>') !!}
            </div>
            <div class="form-group">
                {{ Form::label('Correo Profesor Correferente') }}
                {{ Form::text('CorreoProfesorCorref', $proyecto->CorreoProfesorCorref, ['class' => 'form-control' . ($errors->has('CorreoProfesorCorref') ? ' is-invalid' : ''), 'placeholder' => '']) }}
                {!! $errors->first('CorreoProfesorCorref', '<div class="invalid-feedback">:message</div>') !!}
            </div>
            <div class="form-group">
                {{ Form::label('Nombre de la Empresa (o del Profesor Correferente), si aplica') }}
                {{ Form::text('NombreEmpresa', $proyecto->NombreEmpresa, ['class' => 'form-control' . ($errors->has('NombreEmpresa') ? ' is-invalid' : ''), 'placeholder' => '']) }}
                {!! $errors->first('NombreEmpresa', '<div class="invalid-feedback">:message</div>') !!}
            </div>
            <div class="form-group">
                {{ Form::label('Indique si está asociado pago al Profesor Correferente') }} <br>
                <select name="Pago" id="Pago">
                <option value="SÍ">SÍ</option>
                <option value="NO">NO</option>
                </select>
                {!! $errors->first('Pago', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>
        <br><div class="card-header">{{  ('Información tema:') }}</div><br>
        <div class="card-body">
            <div class="form-group">
                {{ Form::label('Título del Tema') }}
                {{ Form::text('TituloTema', $proyecto->TituloTema, ['class' => 'form-control' . ($errors->has('TituloTema') ? ' is-invalid' : ''), 'placeholder' => '']) }}
                {!! $errors->first('TituloTema', '<div class="invalid-feedback">:message</div>') !!}
            </div>
            <div class="form-group">
                {{ Form::label('Indique si el proyecto es individual o grupal') }} <br>
                <select name="Tipo" id="Tipo">
                <option value="Individual">Individual</option>
                <option value="Grupal">{{"Grupal (2 alumnos)"}}</option>
                </select>
                {!! $errors->first('Tipo', '<div class="invalid-feedback">:message</div>') !!}
            </div>
            <div class="form-group">
                {{ Form::label('Área afín (seleccione las áreas relacionadas con su proyecto, máximo 2)') }} <br>
                <select name="Area1" id="Area1">
                <option value="Redes de Computadores">Redes de Computadores</option>
                <option value="Telecomunicaciones">Telecomunicaciones</option>
                <option value="Automatización y Control">Automatización y Control</option>
                <option value="Máquinas y Accionamiento">Máquinas y Accionamiento</option>
                <option value="Electrónica de Potencia">Electrónica de Potencia</option>
                <option value="Sistemas Electrónicos e Instrumentación">Sistemas Electrónicos e Instrumentación</option>
                <option value="Industrias Eléctricas y Fotometría">Industrias Eléctricas y Fotometría</option>
                <option value="Sistemas Eléctricos de Potencia">Sistemas Eléctricos de Potencia</option>
                <option value="Otro">Otro</option>
                </select>
                {!! $errors->first('Area1', '<div class="invalid-feedback">:message</div>') !!}
            </div>
            <div class="form-group">
                {{ Form::label('Área afín N°2 (si aplica)') }} <br>
                <select name="Area2" id="Area2">
                <option value="Redes de Computadores">Redes de Computadores</option>
                <option value="Telecomunicaciones">Telecomunicaciones</option>
                <option value="Automatización y Control">Automatización y Control</option>
                <option value="Máquinas y Accionamiento">Máquinas y Accionamiento</option>
                <option value="Electrónica de Potencia">Electrónica de Potencia</option>
                <option value="Sistemas Electrónicos e Instrumentación">Sistemas Electrónicos e Instrumentación</option>
                <option value="Industrias Eléctricas y Fotometría">Industrias Eléctricas y Fotometría</option>
                <option value="Sistemas Eléctricos de Potencia">Sistemas Eléctricos de Potencia</option>
                <option value="Otro">Otro</option>
                <option value="No aplica">No aplica</option>
                </select>
                {!! $errors->first('Area2', '<div class="invalid-feedback">:message</div>') !!}
            </div>
            <div class="form-group">
                {{ Form::label('Descripción resumida del proyecto') }}
                {{ Form::text('Resumen', $proyecto->Resumen, ['class' => 'form-control' . ($errors->has('Resumen') ? ' is-invalid' : ''), 'placeholder' => '']) }}
                {!! $errors->first('Resumen', '<div class="invalid-feedback">:message</div>') !!}
            </div>
            <div class="form-group">
                {{ Form::label('Objetivo General') }}
                {{ Form::text('ObjetivoGeneral', $proyecto->ObjetivoGeneral, ['class' => 'form-control' . ($errors->has('ObjetivoGeneral') ? ' is-invalid' : ''), 'placeholder' => '']) }}
                {!! $errors->first('ObjetivoGeneral', '<div class="invalid-feedback">:message</div>') !!}
            </div>
            <div class="form-group">
                {{ Form::label('Objetivos Especificos') }}
                {{ Form::text('ObjetivoEspecifico', $proyecto->ObjetivoEspecifico, ['class' => 'form-control' . ($errors->has('ObjetivoEspecifico') ? ' is-invalid' : ''), 'placeholder' => '']) }}
                {!! $errors->first('ObjetivoEspecifico', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>

        <br><div class="card-header">{{  ('Financiamiento:') }}</div><br>
        <div class="card-body">
            <div class="form-group">
                {{ Form::label('Indique los medios de financiamiento (propio, externo, , proyecto, otro). Si es por solicitud de financiamiento de la EIE, completar el formulario de Solicitud de Fondos. ') }} <br>
                <select name="Financiamiento" id="Financiamiento">
                <option value="Propio">Propio</option>
                <option value="Externo">Externo</option>
                <option value="Otro">Otro</option>
                </select>
                {!! $errors->first('Financiamiento', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>

        <br><div class="card-header">{{  ('Vinculación:') }}</div><br>
        <div class="card-body">
            <div class="form-group">
                {{ Form::label('¿El proyecto tiene algún impacto o vinculación social?') }} <br>
                <select name="ImpactoSocial" id="ImpactoSocial">
                <option value="SÍ">SÍ</option>
                <option value="NO">NO</option>
                </select>
                {!! $errors->first('ImpactoSocial', '<div class="invalid-feedback">:message</div>') !!}
            </div>
            <div class="card-body">{{  ('Si la respuesta es sí, complete lo siguiente:') }}</div>
            <div class="form-group">
                {{ Form::label('Lugar') }}
                {{ Form::text('LugarIS', $proyecto->LugarIS, ['class' => 'form-control' . ($errors->has('LugarIS') ? ' is-invalid' : ''), 'placeholder' => '']) }}
                {!! $errors->first('LugarIS', '<div class="invalid-feedback">:message</div>') !!}
            </div>
            <div class="form-group">
                {{ Form::label('Justificación') }}
                {{ Form::text('RazonIS', $proyecto->RazonIS, ['class' => 'form-control' . ($errors->has('RazonIS') ? ' is-invalid' : ''), 'placeholder' => '']) }}
                {!! $errors->first('RazonIS', '<div class="invalid-feedback">:message</div>') !!}
            </div>
            <br><br><div class="form-group">
                {{ Form::label('¿El proyecto tiene alguna vinculación con empresa?') }} <br>
                <select name="VinculacionEmpresa" id="VinculacionEmpresa">
                <option value="SÍ">SÍ</option>
                <option value="NO">NO</option>
                </select>
                {!! $errors->first('VinculacionEmpresa', '<div class="invalid-feedback">:message</div>') !!}
            </div>
            <div class="card-body">{{  ('Si la respuesta es sí, complete lo siguiente:') }}</div>
            <div class="form-group">
                {{ Form::label('Lugar') }}
                {{ Form::text('LugarVE', $proyecto->LugarVE, ['class' => 'form-control' . ($errors->has('LugarVE') ? ' is-invalid' : ''), 'placeholder' => '']) }}
                {!! $errors->first('LugarVE', '<div class="invalid-feedback">:message</div>') !!}
            </div>
            <div class="form-group">
                {{ Form::label('Justificación') }}
                {{ Form::text('RazonVE', $proyecto->RazonVE, ['class' => 'form-control' . ($errors->has('RazonVE') ? ' is-invalid' : ''), 'placeholder' => '']) }}
                {!! $errors->first('RazonVE', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>

        <br><div class="form-group">
            {{ Form::label('¿Para la realización del proyecto ¿requiere apoyo de taller electromecánico de la EIE?') }} <br>
            <select name="Apoyo" id="Apoyo">
            <option value="SÍ">SÍ</option>
            <option value="NO">NO</option>
            </select>
            {!! $errors->first('Apoyo', '<div class="invalid-feedback">:message</div>') !!}
        </div><br>

        <br><div class="card-header">{{  ('Alumnos:') }}</div><br>
        <div class="card-body">

            <div class="form-group">
                {{ Form::label('Estado de Reserva del Proyecto.') }} <br>
                <select name="EstadoReserva" id="EstadoReserva">
                <option value="DISPONIBLE">Disponible</option>
                <option value="RESERVADO">Reservado</option>
                <option value="NO DISPONIBLE">No disponible / Ocupado</option>
                </select>
                {!! $errors->first('EstadoReseva', '<div class="invalid-feedback">:message</div>') !!}
            </div><br>
            <div class="form-group">
                {{ Form::label('Rut Alumno 1') }}
                {{ Form::text('RutAlumno1', $proyecto->RutAlumno1, ['class' => 'form-control' . ($errors->has('RutAlumno1') ? ' is-invalid' : ''), 'placeholder' => '']) }}
                {!! $errors->first('RutAlumno1', '<div class="invalid-feedback">:message</div>') !!}
            </div>
            <div class="form-group">
                {{ Form::label('Nombre Alumno 1') }}
                {{ Form::text('NombreAlumno1', $proyecto->NombreAlumno1, ['class' => 'form-control' . ($errors->has('NombreAlumno1') ? ' is-invalid' : ''), 'placeholder' => '']) }}
                {!! $errors->first('NombreAlumno1', '<div class="invalid-feedback">:message</div>') !!}
            </div>
            <div class="form-group">
                {{ Form::label('Carrera Alumno 1') }}
                {{ Form::text('CarreraAlumno1', $proyecto->CarreraAlumno1, ['class' => 'form-control' . ($errors->has('CarreraAlumno1') ? ' is-invalid' : ''), 'placeholder' => '']) }}
                {!! $errors->first('CarreraAlumno1', '<div class="invalid-feedback">:message</div>') !!}
            </div>
            <div class="form-group">
                {{ Form::label('Rut Alumno 2') }}
                {{ Form::text('RutAlumno2', $proyecto->RutAlumno2, ['class' => 'form-control' . ($errors->has('RutAlumno2') ? ' is-invalid' : ''), 'placeholder' => '']) }}
                {!! $errors->first('RutAlumno2', '<div class="invalid-feedback">:message</div>') !!}
            </div>
            <div class="form-group">
                {{ Form::label('Nombre Alumno 2') }}
                {{ Form::text('NombreAlumno2', $proyecto->NombreAlumno2, ['class' => 'form-control' . ($errors->has('NombreAlumno2') ? ' is-invalid' : ''), 'placeholder' => '']) }}
                {!! $errors->first('NombreAlumno2', '<div class="invalid-feedback">:message</div>') !!}
            </div>
            <div class="form-group">
                {{ Form::label('Carrera Alumno 2') }}
                {{ Form::text('CarreraAlumno2', $proyecto->CarreraAlumno2, ['class' => 'form-control' . ($errors->has('CarreraAlumno2') ? ' is-invalid' : ''), 'placeholder' => '']) }}
                {!! $errors->first('CarreraAlumno2', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        </div>

        @if (Auth::user()-> role == 'Admin')
        <br><div class="form-group">
            {{ Form::label('Estado actual de la autorización del proyecto propuesto.') }} <br>
            <select name="EstadoAutorizacion" id="EstadoAutorizacion">
            <option value="AUTORIZADO">Autorizado</option>
            <option value="PENDIENTE">Pendiente</option>
            <option value="RECHAZADO">Rechazado</option>
            </select>
            {!! $errors->first('EstadoAutorizacion', '<div class="invalid-feedback">:message</div>') !!}
            </div>
        @endif

    </div>
    <div class="box-footer mt20">
        <br><button type="submit" class="btn btn-primary">Guardar</button>
    </div>
</div>
<script>
    
    A = document.getElementById('A');
    var select = document.querySelector('#Semestre');
    select.value = A.value;

    B = document.getElementById('B');
    var select = document.querySelector('#Pago');
    select.value = B.value;

    C = document.getElementById('C');
    var select = document.querySelector('#Tipo');
    select.value = C.value;

    D = document.getElementById('D');
    var select = document.querySelector('#Area1');
    select.value = D.value;

    E = document.getElementById('E');
    var select = document.querySelector('#Area2');
    select.value = E.value;

    F = document.getElementById('F');
    var select = document.querySelector('#Financiamiento');
    select.value = F.value;

    G = document.getElementById('G');
    var select = document.querySelector('#ImpactoSocial');
    select.value = G.value;
    
    H = document.getElementById('H');
    var select = document.querySelector('#VinculacionEmpresa');
    select.value = H.value;
    
    I = document.getElementById('I');
    var select = document.querySelector('#Apoyo');
    select.value = I.value;
    
    J = document.getElementById('J');
    var select = document.querySelector('#EstadoAutorizacion');
    select.value = J.value;

    K = document.getElementById('K');
    var select = document.querySelector('#EstadoReserva');
    select.value = K.value;
</script>