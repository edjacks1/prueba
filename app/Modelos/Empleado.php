<?php

namespace App\Modelos;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Empleado extends Model{

    use SoftDeletes;

    protected $fillable = [
        'nombre', 
        'apellido_paterno', 
        'apellido_materno',
        'tipo_contrato',
        'email',
        'estado'
    ];


}
