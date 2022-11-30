<!DOCTYPE html>
<html lang="es">

<head>
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Diario Laravel</title>
</head>

<body class="bg-info bg-gradient">
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Diario Laravel</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">

          <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('apodoHome')? 'text-primary fw-bold':'' }}" href="/home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('recuerdo.create')? 'text-danger fw-bold text-decoration-line-through':'' }}" href="{{route('recuerdo.create')}}">Registrar Recuerdo</a>
          </li> 
          <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('recuerdo.index')? 'text-primary fw-bold':'' }}"
               href="{{route('recuerdo.index')}}">Ver Recuerdos</a>
          </li>

        </ul>
      </div>
    </div>
  </nav>

  <!-- Contenido -->
  @yield('contenido')



  <!-- Pie de Página -->
  <div class="alert alert-warning" role="alert">
    Carlos Alberto Matías Jiménez® 2022
  </div>



  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>

</html>