<x-modal id="modal-ver" tamanio="modal-lg" titulo="Ver empleados" accion="Regresar">

    <x-slot name="html">
      <form class="formulario" id="form_ver">
        @include('Empleados.formulario')
      </form>
    </x-slot>

    <x-slot name="evento"></x-slot>

</x-modal>