<div class="box box-info padding-1">
    <div class="box-body">
        <input type="hidden" id="rol" value="{{$user->role}}" >
        <div class="form-group">
            {{ Form::label('Rol') }} <br>
            <select name="role" id="role">
            <option value="Alumno">Alumno</option>
            <option value="Docente">Docente</option>
            <option value="Admin">Admin</option>
            </select>
            {!! $errors->first('role', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Nombre') }}
            {{ Form::text('name', $user->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Name']) }}
            {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Correo') }}
            {{ Form::text('email', $user->email, ['class' => 'form-control' . ($errors->has('email') ? ' is-invalid' : ''), 'placeholder' => 'Email']) }}
            {!! $errors->first('email', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Contraseña') }}
            {{ Form::text('password', $user->password, ['class' => 'form-control' . ($errors->has('password') ? ' is-invalid' : ''), 'placeholder' => 'Password']) }}
            {!! $errors->first('password', '<div class="invalid-feedback">:message</div>') !!}
        </div>
    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Confirmar</button>
    </div>
</div>
<script>
    
        rol = document.getElementById('rol');
        var select = document.querySelector('#role');
        select.value = rol.value;
    
</script>