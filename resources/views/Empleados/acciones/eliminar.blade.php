<form style="display: inline" method="post" action="{{route('empleados.eliminar',$empleado->id)}}">
    @method('DELETE') {{-- Establesco el metodo --}}
    @csrf

    <button type="submit" class="btn btn-danger">Eliminar</button>          
</form>