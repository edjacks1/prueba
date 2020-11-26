<?php

namespace App\Http\Controllers;

use App\empleados;
use Illuminate\Http\Request;
//Modelos
use App\Modelos\Empleado;

class EmpleadosController extends Controller{

    private $request;

    function __construct(Request $request) {
        $this->request = $request;
    }
    
    public function index(){
        $empleados = Empleado::all();
        // dd();

        return view('Empleados.index', compact('empleados'));
    }

    public function create(){

        $validatedData = $this->request->validate([
            'nombre'           => 'required|unique:posts|max:255',
            'apellido_paterno' => 'required',
            'apellido_materno' => 'required',
            'tipo_contracto'   => 'required',
            'estado'           => 'required'
        ]);

        dd($validatedData);
        
        Empleado::create([
            'nombre'           => 'Edwin',
            'apellido_paterno' => 'Otwell',
            'apellido_materno' => 'Developer',
            'tipo_contracto'   => 'Algun contrato',
            'estado'           => 0
        ]);

        return redirect()->route('empleados.index');
    }

    public function store()
    {
        //
    }

    public function show(empleados $empleados)
    {
        //
    }

    public function edit(empleados $empleados)
    {
        //
    }

    public function update(Request $request, empleados $empleados)
    {
        //
    }

    public function destroy(empleados $empleados)
    {
        //
    }
}
