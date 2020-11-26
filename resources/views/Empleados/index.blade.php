@extends('Layout.index')

{{-- Si existe un error mostar el mensaje --}}


@section('content')
  <div class="container mt-5">
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-agregar">Agregar</button>

    <table class="table container" >
        <thead class="thead-dark">
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Nombre</th>
            <th scope="col">Email</th>
            <th scope="col">Tipo de contracto</th>
            <th scope="col">Opciones</th>
          </tr>
        </thead>
        <tbody>
    
          @foreach ($empleados as $empleado)
            <tr>
                <td> {{$empleado->id}}                                                                     </th>
                <td> {{$empleado->nombre.' '.$empleado->apellido_paterno.' '.$empleado->apellido_materno}} </td>
                <td> {{$empleado->email}}                                                                  </td>
                <td> {{$empleado->tipo_contrato}}                                                          </td>
                <td> 
                  {{-- Boton para modificar los datos del empleado --}}
                  <button type="button" class="btn btn-primary" 
                                        onclick="llenarFormulario( 'modal-actualizar','form_editar','{{$empleado}}' )">
                                        Editar  
                  </button> 
                  {{-- Boton para mostrar el empleado --}}
                  <button type="button" class="btn btn-success"
                                        onclick="llenarFormulario( 'modal-ver','form_ver','{{$empleado}}', true )">
                                        Ver     
                  </button> 
                  {{-- Validar el estatus del empleado --}}
                  @include('Empleados.acciones.cambiarEstatus')
                  {{-- Boton para eliminar empleado --}}
                  @include('Empleados.acciones.eliminar')
                </td>
            </tr>
          @endforeach
          
        </tbody>
    </table>

  </div>

  @include('Empleados.acciones.crear')
  @include('Empleados.acciones.actualizar')
  @include('Empleados.acciones.verDetalles')

@endsection

@push('scripts')
  <script src="{{asset('Empleados/general.js')}}"></script>
@endpush



