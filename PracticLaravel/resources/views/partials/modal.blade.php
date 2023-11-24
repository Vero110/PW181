  <!-- Modal -->
  <div class="modal fade" id="editar{{$item->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>  <!-- cierra el modal -->

        <div class="modal-body">
            <form method="POST" action="/recuerdo/{{$item->id}}/confirm">
                @csrf
                <!-- eco escapado -->
                {!! method_field('PUT')!!}

                  <div class="mb-3">
                    <label class="form-label">Titulo:</label>
                    <input type="text" name="txtTitulo" class="form-control" value="{{ $item->titulo }}">
                    <p class="text-danger fst-italic fw-bold"> {{$errors->first('txtTitulo')}}
                  </div>

                  <div class="mb-3">
                      <label class="form-label">Recuerdo:</label>
                      <input type="text" name="txtRecuerdo" class="form-control" value="{{ $item-> recuerdo}}">
                      <p class="text-danger fst-italic fw-bold"> {{$errors->first('txtRecuerdo')}}
                  </div>
        </div>
        <div class="modal-footer">
            <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-outline-info">Actualizar recuerdo</button>
            </form>
            </div>
        </div>
        
      </div>
    </div>
</div>
