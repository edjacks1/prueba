<x-modal id="modal-agregar" tamanio="modal-lg" titulo="Agregar empleados" accion="Agregar">

    <x-slot name="html">
      <form class="formulario" id="form_agregar" method="post" action="{{route('empleados.crear')}}">
        @include('Empleados.formulario') {{-- Incluyo el formulario --}}
      </form>
    </x-slot>

    <x-slot name="evento">
      onclick="crear()"
    </x-slot>

</x-modal>