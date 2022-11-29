@extends('plantilla')

@section('contenido')

    

    <div class="container mt-2 col-md-6">
        <h1 class="display-2 text-center mb-5">Editar Recuerdo </h1>

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
                Correcciones
            </div>

            <div class="card-body">
                <form action="{{route('recuerdo.update', $consultaID->idRecuerdos)}}" method="post">
                    @csrf
                    {!!method_field('PUT')!!}

                    <div class="mb-3">
                        <label class="form-label">TÍTULO</label>
                        <input type="text" class="form-control" name="txtTitulo" value="{{$consultaID->titulo}}">
                        <p class="text-primary fst-italic">{{ $errors->first('txtTitulo') }}</p>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">RECUERDO</label>
                        <input type="text" class="form-control" name="txtRecuerdo" value="{{$consultaID->recuerdo}}">
                        <p class="text-primary fst-italic">{{ $errors->first('txtRecuerdo') }}</p>
                    </div>


            </div>

            <div class="card-footer text-muted">

                <button type="submit" class="btn btn-success">ACTUALIZAR</button>
                </form>
            </div>
        </div>
    </div>


@stop
