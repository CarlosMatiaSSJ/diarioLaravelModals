@extends('plantilla')

@section('contenido')
@if (session()->has('actualizacion'))
        {!! "<script>Swal.fire(
                'Correcto!',
                'Se ha editado el recuerdo!',
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
                <a href="{{route('recuerdo.edit',$consulta->idRecuerdos)}}" class="btn btn-primary">Editar Recuerdo</a>
                <a href="{{route('recuerdo.show',$consulta->idRecuerdos)}}" class="btn btn-primary">Eliminar Recuerdo</a>
            </div>
          </div>
              
       
    </div>
    @endforeach

@stop
