@extends('layouts.app')

@section('content')
<div class="container">


<form action="{{url('/test/'.$consulta->id)}}" method="post" enctype="multipart/form-data">
@csrf
{{method_field('PATCH')}}

@include('test.form',['modo'=>'Editar']);

</form>

</div>
@endsection