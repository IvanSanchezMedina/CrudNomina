@extends('layouts.app')
@section('content')
   

<div class="container">
    <div class="form-inline">
        <form  method="POST" action="{{route('empleados.store')}}">
            @method('POST')
            @csrf
        <div>
            <input type="text" class="form-control" name="nombre" value="{{$empleado->}}">
            
        </div>
        <div>
            <input type="text" class="form-control" name="apellido_paterno" value="{{$empleado->}}">
            
        </div>
        <div>
            <input type="text" class="form-control" name="apellido_materno" value="{{$empleado->}}">
            
        </div>
        <div>
            <input type="text" class="form-control" name="codigo" value="{{$empleado->}}" >
            
        </div>
        <div>
            <input type="email∫" class="form-control" name="correo" value="{{$empleado->}}">
        </div>
        <div>
            <input type="text" class="form-control" name="tipo_contrato" value="{{$empleado->}}">
        </div>
        <div>
            <select name="estado" id="">
                <option value="" disabled hidden selected>Selecciona una opcion</option>
                <option value="Activo">Activo</option>
                <option value="Inactivo">Inactivo</option>
            </select>
        </div>
        
        <div>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </div>

    </form>


    </div>
</div>
@endsection