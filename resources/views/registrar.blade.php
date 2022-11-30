<!-- Modal -->
<div class="modal fade" id="modalAgregar" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalAgregar" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">


        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabel">Agregar Recuerdo</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>


        <div class="modal-body">
            <div class="card-body">
                <form action="{{route('recuerdo.store')}}" method="post">
                    @csrf

                    <div class="mb-3">
                        <label class="form-label">TÍTULO</label>
                        <input type="text" class="form-control" name="txtTitulo" value="{{ old('txtTitulo') }}">
                        <p class="text-primary fst-italic">{{ $errors->first('txtTitulo') }}</p>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">RECUERDO</label>
                        <input type="text" class="form-control" name="txtRecuerdo" value="{{ old('txtRecuerdo') }}">
                        <p class="text-primary fst-italic">{{ $errors->first('txtRecuerdo') }}</p>
                    </div>


            </div>

            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                <button type="submit" class="btn btn-primary">GUARDAR</button>
                </form>
            </div>
        </div>
        
      </div>
    </div>
  </div>