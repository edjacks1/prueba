<x-modal id="modal-actualizar" tamanio="modal-lg" titulo="Editar empleados" accion="Editar">

    <x-slot name="html">
      <form class="formulario" id="form_editar" method="post" action="{{route('empleados.actualizar',0)}}">
        
        @method('PUT') {{-- Establesco el metodo --}}
        @include('Empleados.formulario') {{-- Incluyo el formulario --}}

        <div hidden>
          <x-input tipo="" atributo="id" nombreDisplay="" />
        </div>
      </form>
    </x-slot>

    <x-slot name="evento">
      onclick="actualizar()"
    </x-slot>

</x-modal>