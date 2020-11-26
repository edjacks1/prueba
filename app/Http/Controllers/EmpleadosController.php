<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
//Modelos
use App\Modelos\Empleado;


class EmpleadosController extends Controller{

    public function index(){
        $empleados = Empleado::all();

        return view('Empleados.index', compact('empleados'));
    }

    public function crear(Request $request){
        //Valido el request
        $validador = $this->validarRequest( $request );
        //Si falla lo retornamos a la ruta del index
        if( $validador->fails() ){
            return redirect()->route('empleados.index')->withErrors( $validador->messages()->get('*') );
        }
        //Obtenemos solo los atributos validados
        $validador = $validador->valid();
        //Creamos el empleado
        $empleado = Empleado::create([
            'nombre'           => $validador['nombre'],
            'apellido_paterno' => $validador['apellido_paterno'],
            'apellido_materno' => $validador['apellido_materno'],
            'tipo_contrato'    => $validador['tipo_contrato'],
            'email'            => $validador['email'],
            'estado'           => 0
        ]);

        return redirect()->route('empleados.index');
    }

    public function actualizar(Request $request, Empleado $empleado){
        //Valido el request
        $validador = $this->validarRequest( $request );
        //Si falla lo retornamos a la ruta del index
        if( $validador->fails() ){
            return redirect()->route('empleados.index')->withErrors( $validador->messages()->get('*') );
        }
        //Obtenemos solo los atributos validados
        $validador = $validador->valid();
        //Actualizo al empleado
        $empleado->update([
            'nombre'           => $validador['nombre'],
            'apellido_paterno' => $validador['apellido_paterno'],
            'apellido_materno' => $validador['apellido_materno'],
            'tipo_contrato'    => $validador['tipo_contrato'],
            'email'            => $validador['email'],
            'estado'           => 0
        ]);

        return redirect()->route('empleados.index');
    }

    public function cambiarEstatus(Request $request, Empleado $empleado ){

        $empleado->estado = ($empleado->estado === 0) ? 1 : 0;
        $empleado->save();

        return redirect()->route('empleados.index');
    }

    public function eliminar(Request $request, Empleado $empleado ){

        $empleado->delete();
        
        return redirect()->route('empleados.index');
    }

    public function validarRequest(Request $request){
        //Validar los campos necesarios
        $validador = Validator::make($request->all(), [
            'nombre'           => 'required|regex:/^([^0-9]*)$/',
            'apellido_paterno' => 'required|regex:/^([^0-9]*)$/',
            'apellido_materno' => 'required|regex:/^([^0-9]*)$/',
            'tipo_contrato'    => 'required',
            'email'            => 'required|email'
        ]);
    
        return $validador; //Retornamos el validador
    }
}
