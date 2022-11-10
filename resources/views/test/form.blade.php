Formulario de proyectos
<h1>{{$modo }} datos</h1>

@if(count($errors)>0)

    <div class="alert alert-primary" role="alert">
    <ul>
    @foreach($errors->all() as $error)
        <li>{{$error}}</li>
    @endforeach
    </ul>
    </div>


@endif

    <div class="form-group">
    <label for="Nombre"> Nombre </label>
    <input type="text" class="form-control" name="Nombre" value="{{isset($consulta->Nombre)?$consulta->Nombre:old('Nombre')}}" id="Nombre">
    <br>
    </div>
    <div class="form-group">
    <label for="ApellidoPaterno"> Apellido Paterno </label>
    <input type="text" class="form-control" name="ApellidoPaterno" value="{{isset($consulta->ApellidoPaterno)?$consulta->ApellidoPaterno:old('ApellidoPaterno')}}" id="ApellidoPaterno">
    <br>
    </div>
    <div class="form-group">
    <label for="ApellidoMaterno"> Apellido Materno </label>
    <input type="text" class="form-control" name="ApellidoMaterno" value="{{isset($consulta->ApellidoMaterno)?$consulta->ApellidoMaterno:old('ApellidoMaterno')}}" id="ApellidoMaterno">
    <br>
    </div>
    <div class="form-group">
    <label for="Rut"> Rut (sin puntos y con guión al final) </label>
    <input type="text" class="form-control" name="Rut" value="{{isset($consulta->Rut)?$consulta->Rut:old('Rut')}}" id="Rut">
    <br>
    </div>
    <div class="form-group">
    <label for="Correo"> Correo electrónico </label>
    <input type="text" class="form-control" name="Correo" value="{{isset($consulta->Correo)?$consulta->Correo:old('Correo')}}" id="Correo">
    <br>
    </div>
    <div class="form-group">
    <label for="AñoDeIngreso"> Año de ingreso </label>
    <input type="text" class="form-control" name="AñoDeIngreso" value="{{isset($consulta->AñoDeIngreso)?$consulta->AñoDeIngreso:old('AñoDeIngreso')}}" id="AñoDeIngreso">
    <br>
    </div>
    
    <input class="btn btn-success" type="submit" value="{{$modo }} datos">
    <a class="btn btn-primary" href="{{url('test')}}"> Regresar</a>

    <br>
    
    