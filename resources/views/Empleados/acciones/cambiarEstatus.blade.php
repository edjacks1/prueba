<form id="form_estatus" style="display: inline" method="post" action="{{route('empleados.estatus',$empleado->id)}}">
    @method('PUT') {{-- Establesco el metodo --}}
    @csrf
    
    @if($empleado->estado)
        <button type="submit" class="btn btn-warning">Activar</button> 
    @else
        <button type="submit" class="btn btn-warning">Desactivar</button> 
    @endif           
</form>
