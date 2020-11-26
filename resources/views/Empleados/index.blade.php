@extends('Layout.index')

<div class="container mt-5">
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#formulario-agregar">Agregar</button>

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
                <td> {{$empleado->id}} </th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
            </tr>
          @endforeach
          
        </tbody>
    </table>

</div>

<div class="modal fade" id="formulario-agregar" tabindex="-1">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Agregar empleados</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          
            @include('Empleados.formulario')

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          <button type="button" class="btn btn-primary">Agregar</button>
        </div>
      </div>
    </div>
  </div>


