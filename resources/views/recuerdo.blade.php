@extends('plantilla')

@section('contenido')


@include('registrar')

@if (session()->has('actualizacion'))
        {!! "<script>Swal.fire(
                'Correcto!',
                'Se ha editado el recuerdo!',
                'success'
              )</script>" !!}
    @endif
    @if (session()->has('confirmación'))
        {!! "<script>Swal.fire(
                'Correcto!',
                'Se ha Registrado el recuerdo!',
                'success'
              )</script>" !!}
    @endif
    @if (session()->has('eliminado'))
        {!! "<script>Swal.fire(
                'Correcto!',
                'Se ha eliminado el recuerdo!',
                'success'
              )</script>" !!}
    @endif

    <h1 class="display-1 mt-4 mb-4 text-center">Recuerdos </h1>
    <div class="container col-md-6 mb-5 mt-5 d-grid gap-2">
      <!-- Agregar -->
      <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modalAgregar">
        Agregar Recuerdo <i class="bi bi-file-plus"></i>
      </button>
    </div>
          
          

    @foreach ($consultaRecuerdos as $consulta)
        
    <div class="container col-md-6 mb-5 mt-5">

 

        <div class="card text-center">
            <div class="card-header">
                <h5 class="text-primary text-center"> {{$consulta->fecha}}</h5>
            </div>


            <div class="card-body">
              <h5 class="card-title"> {{$consulta->titulo}}  </h5>
              <p class="card-text"> {{$consulta->recuerdo}}    </p>
            </div>

            
            <div class="card-footer text-muted">

                <!-- Editar -->
                
                <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#modalActualizar{{$consulta->idRecuerdos}}">
                  Actualizar Recuerdo  <i class="bi bi-pen-fill"></i>
                </button>


                <!-- Eliminar -->
                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modalEliminar{{$consulta->idRecuerdos}}">
                  Eliminar Recuerdo <i class="bi bi-trash3"></i>
                </button>
            </div>
            @include('editar')
            @include('eliminar')
          </div>
              
       
    </div>
    @endforeach

@stop
