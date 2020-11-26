<div class="modal" id="{{$id}}" tabindex="-1">
    <div class="modal-dialog {{$tamanio}}">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">{{$titulo}}</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          {{$html}}
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" {{$evento}}>{{$accion}}</button>
        </div>
      </div>
    </div>
  </div>