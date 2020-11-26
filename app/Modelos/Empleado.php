<?php

namespace App\Modelos;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model{

    protected $fillable = [
        'nombre', 
        'apellido_paterno', 
        'apellido_materno',
        'tipo_contracto',
        'estado'
    ];


}
