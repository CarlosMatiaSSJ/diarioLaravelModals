                <!-- Modal -->
                <div class="modal fade" id="modalEliminar{{$consulta->idRecuerdos}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalEliminar" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                
                
                        <div class="modal-header">
                          <h1 class="modal-title fs-5" id="staticBackdropLabel">Eliminar Recuerdo</h1>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                
                
                        <div class="modal-body">
                          
                <h1>¿Seguro que quieres eliminar el recuerdo: {{ $consulta->titulo }} ?</h1>
                <h3>{{ $consulta->recuerdo }}</h3>

                        </div>
                        <form action="{{ route('recuerdo.destroy', $consulta->idRecuerdos) }}" method="post">
                          @csrf
                          @method('delete')
                          <div class="modal-footer text-muted">
                              <button type="submit" class="btn btn-danger">Eliminar</button>
                              <a type="button" class="btn btn-warning" data-bs-dismiss="modal">Cancelar</a>
          
                          </div>
                      </form>


                      
                      </div>
                    </div>
                  </div>