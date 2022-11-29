@extends('plantilla')

@section('contenido')



    <div class="container mt-2 col-md-6">
        <h1 class="display-2 text-center mb-5">¿Eliminar Recuerdo? </h1>

        @if ($errors->any())
            @foreach ($errors->all() as $error)
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>{{ $error }}</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endforeach
        @endif


        <div class="card text-center mb-5 ">
            <div class="card-header">
                Eliminar recuerdo
            </div>

            <div class="card-body">


                <h1>¿Seguro que quieres eliminar el recuerdo: {{ $consultaRecuerdo->titulo }} ?</h1>
                <h3>{{ $consultaRecuerdo->recuerdo }}</h3>




            </div>

            <form action="{{ route('recuerdo.destroy', $consultaRecuerdo->idRecuerdos) }}" method="post">
                @csrf
                @method('delete')
                <div class="card-footer text-muted">
                    <button type="submit" class="btn btn-danger">Eliminar</button>
                    <a type="button" class="btn btn-warning text-light" href="{{ route('recuerdo.store') }}">Cancelar</a>

                </div>
            </form>

        </div>
    </div>


@stop
