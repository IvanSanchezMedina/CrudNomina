@extends('layouts.app')
@section('content')
   

<div class="container">
    <div class="form-inline">
        <form  method="POST" action="{{route('empleados.edit',$empleado->id)}}">
            @method('PUT')
            @csrf
        <div>
            <input type="text" class="form-control" name="nombre" value="{{$empleado->nombre}}">
            
        </div>
        <div>
            <input type="text" class="form-control" name="apellido_paterno" value="{{$empleado->apellido_paterno}}">
            
        </div>
        <div>
            <input type="text" class="form-control" name="apellido_materno" value="{{$empleado->apellido_materno}}">
            
        </div>
        <div>
            <input type="text" class="form-control" name="codigo" value="{{$empleado->codigo}}" >
            
        </div>
        <div>
            <input type="email" class="form-control" name="correo" value="{{$empleado->correo}}">
        </div>
        <div>
            <input type="text" class="form-control" name="tipo_contrato" value="{{$empleado->tipo_contrato}}">
        </div>
        <div>
            <select name="estado" id="">
                <option value="" disabled hidden selected>Selecciona una opcion</option>
                <option value="Activo">Activo</option>
                <option value="Inactivo">Inactivo</option>
            </select>
        </div>
        
        <div>
            <button type="submit" class="btn btn-primary">Actualizar</button>
        </div>

    </form>


    </div>
</div>
@endsection