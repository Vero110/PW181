
<div class="modal fade" id="eliminar{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Confirmar eliminación</h5>
                <form method="POST" action="/recuerdo/{{$item->id}}">

                    @csrf
                    @method('DELETE')
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>¿Estás seguro que quieres eliminar el recuerdo "{{ $item->titulo }}"?</p>
            </div>
            <div class="d-grid gap-2">
                <button type="submit" class="btn btn-danger">Eliminar</button>
                <button type="submit" class="btn btn-info">Cancelar</button>
            </form>
            </div>
        </div>
    </div>
</div>

