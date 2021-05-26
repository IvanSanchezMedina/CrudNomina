@extends('layouts.app')
@section('content')
   

<div class="container">
    <div class="form-inline">
        <form  method="POST" action="{{route('empleados.edit',$empleado->id)}}">
            @method('PUT')
            @csrf
        <div>
            <label for="">Nombre: {{$empleado->nombre}}</label>
            
        </div>
        <div>
            <label for="">Apellido paterno: {{$empleado->apellido_paterno}}</label>
            
        </div>
        <div>
            <label for="">Apellido materno: {{$empleado->apellido_materno}}</label>
        </div>
        <div>
            <label for="">Codigo de empleado: {{$empleado->ncodigo}}</label>
            
        </div>
        <div>
            <label for="">Correo: {{$empleado->correo}}</label>
        </div>
        <div>
            <label for="">Tipo contrato: {{$empleado->tipo_contrato}}</label>
        </div>
        <div>
            <label for="">Estado: {{$empleado->estado}}</label>
            
        </div>

    </form>


    </div>
</div>
@endsection