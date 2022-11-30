  <!-- Modal -->
<div class="modal fade" id="modalActualizar{{$consulta->idRecuerdos}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalActualizar{{$consulta->idRecuerdos}}" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">


        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabel">Editar Recuerdo</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        
        <div class="modal-body">
          
          <form action="{{route('recuerdo.update', $consulta->idRecuerdos)}}" method="post">
            @csrf
            {!!method_field('PUT')!!}

            
            <div class="mb-3">
                <label class="form-label">TÍTULO</label>
                <input type="text" class="form-control" name="txtTitulo" value="{{$consulta->titulo}}">
                <p class="text-primary fst-italic">{{ $errors->first('txtTitulo') }}</p>
            </div>

            <div class="mb-3">
                <label class="form-label">RECUERDO</label>
                <input type="text" class="form-control" name="txtRecuerdo" value="{{$consulta->recuerdo}}">
                <p class="text-primary fst-italic">{{ $errors->first('txtRecuerdo') }}</p>
            </div>
        

    </div>

    <div class="modal-footer">

        <button type="submit" class="btn btn-success">ACTUALIZAR</button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        </form>

        </div>
        
      </div>
    </div>
  </div>






