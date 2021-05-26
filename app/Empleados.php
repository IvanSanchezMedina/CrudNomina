<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empleados extends Model
{
    protected $fillable = [
        'id',
        'nombre',
        'apellido_paterno',
        'apellido_materno',
        'correo',
        'codigo',
        'estado',
        'tipo_contrato'
    ];
}
