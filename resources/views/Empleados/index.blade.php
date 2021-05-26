@extends('layouts.app')
@section('content')
   

<div class="container">
    <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
       Agregar empleado
      </a>
      <div class="collapse mt-5 mb-5" id="collapseExample">
        <div class="">
            <form  method="POST" action="{{route('empleados.store')}}">
                @method('POST')
                @csrf
            <div>
                <input type="text" class="form-control" name="nombre" placeholder="Nombre">
                
            </div>
            <div>
                <input type="text" class="form-control" name="apellido_paterno" placeholder="Paterno">
                
            </div>
            <div>
                <input type="text" class="form-control" name="apellido_materno" placeholder="Materno">
                
            </div>
            <div>
                <input type="text" class="form-control" name="codigo" placeholder="Còdigo">
                
            </div>
            <div>
                <input type="email" class="form-control" name="correo" placeholder="Correo">
            </div>
            <div>
                <input type="text" class="form-control" name="tipo_contrato" placeholder="Tipo contrato">
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="estado" id="inlineRadio1" value="Activo">
                <label class="form-check-label" for="inlineRadio1">Activo</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="estado" id="inlineRadio2" value="Inactivo">
                <label class="form-check-label" for="inlineRadio2">Inactivo</label>
              </div>
            
            
            <div>
                <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
    
        </form>
        </div>
      </div>
    <div class="form-inline">
       
        <table class="table ">
            <thead>
                <th>ID</th>
                <th>Nombre</th>
                <th>Apellido Paterno</th>
                <th>Apellido Materno</th>
                <th>Correo</th>
                <th>Codigo</th>
                <th>Estado</th>
                <th>Tipo de contrato</th>
            </thead>
            <tbody>
                @foreach ($empleados as $empleado)
                     <tr>
                    <th>{{$empleado->id}}</th>
                    <th>{{$empleado->nombre}}</th>
                    <th>{{$empleado->apellido_paterno}}</th>
                    <th>{{$empleado->apellido_materno}}</th>
                    <th>{{$empleado->correo}}</th>
                    <th>{{$empleado->codigo}}</th>
                    <th>{{$empleado->estado}}</th>
                    <th>{{$empleado->tipo_contrato}}</th>
                    <td>
                        <div>
                            <a href="{{route('empleados.detail',$empleado->id)}}">Ver detalle</a>
                        </div>
                        <div>
                            <a href="{{route('empleados.show',$empleado->id)}}">Editar</a>
                        </div>
                        <div>
                            @if ($empleado->estado=='Activo')
                            <a href="{{url("/empleados.status/$empleado->id/2")}}">Desactivar</a>
                            @elseif($empleado->estado=='Inactivo')
                            <a href="{{url("/empleados.status/$empleado->id/1")}}" >Activar</a>
                            @endif
                        </div>
                        <div>
                            <a href="{{route('empleados.delete',$empleado->id)}}">Eliminar</a>
                        </div>

                    </td>
                </tr>
                @endforeach
               
            </tbody>
        </table>


    </div>
</div>
@endsection