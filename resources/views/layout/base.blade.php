<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, height: 85%, width: 100%">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<style media="screen">

  footer{
    width: 100%;
    height: 81px;
    position: relative;
    bottom: 0;
    left: 0;
  }

  main{
    max-height: 80%;
  }
</style>
    <title>SOUTHAM</title>
  </head>
  <body>

<div class="container">
  <div class="row">
    <div class="col-1">
<img src = "/isofrut.png" class="rounded float-center" alt="Responsive image" width="90" height="80">
    </div>
    <div class="col-11" >
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark pb-4 pt-6" >

          <!--<a class="navbar-brand" href="#">Southam</a>-->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="/home">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/tiempo">Reg en Tuneles</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/reportes">Reportes</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Tablas
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="/articulo">Productos</a>
                <a class="dropdown-item" href="/tipo">Tipos de Productos</a>
                <a class="dropdown-item" href="/categoria">Categoria</a>
                <a class="dropdown-item" href="/tunel">Tuneles</a>
              </div>
            </li>
          </ul>
        </div>
      </nav>
    </div>
  </div>
<main>
  @yield('content')
</main>
<footer>
          <div class="row text-right p-3 mb-2 bg-dark text-white pb-1 pt-6">
       <img   src="/ccb_logo.png" class="justify-content-end" alt="Responsive image" width="240" height="60">
       <a href="https://www.ccbsolutions.cl/"> CCBSOLUTIONS</a>
        </div>

</footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <!-- Footer -->

  <!-- Footer -->

  </body>
</html>
