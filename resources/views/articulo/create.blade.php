@extends('layout.base')

@section('content')
<link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
  <div class="row">
      <div class="col">
          <h1>Articulo Nuevo</h1>
          <br>
          <a class="btn btn-primary" href="/articulo">Regresa</a>
           <br>
          <table class="table">
          </table>
      </div>
  </div>
  <div class="row">
    <div class="col">
      @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
      <form class="form-horizontal" action="/articulo" method="POST">
        <div class="form-group">
          <div class="row">
            <div class="col">
              <label for="nombre">Nombre</label>
              <br>
              <input type="text" class="form-control" id="nombre"  name="nombre" placeholder="dime el nombre" value="{{old('nombre')}}">
              <br>
            </div>
            <div class="col">
              <label for="nombre">Fecha Ingreso</label>
              <br>
              <input type="date" class="form-control" id="fecha"  name="fecha" placeholder="dime cuando empezo" value="{{'01/01/1999'}}">
              <br>  
            </div>

          </div>

            <div class="form-group">
            <label for="">tipo</label>
            <select class="form-control" name="tipo" id="tipo">
                 @foreach($tipos as $tipo)
   <option value="{{$tipo['id']}}">{{$tipo['nombre']}}</option>
                 @endforeach
            </select>
          </div>
          <br>
          <br>
            <div class="form-group">
            <label for="">categorias</label>
            <select class="form-control" name="categoria" id="categoria">
                 @foreach($categorias as $categoria)
   <option value="{{$categoria['id']}}">{{$categoria['nombre']}}</option>
                 @endforeach
            </select>
          </div>          <br>
          <label for="nombre">costo</label>
          <br>
          <input type="integer" class="form-control" id="costo"  name="costo" placeholder="costo" value="{{old('costo')}}">
          <br>

          <br>
          <button class="btn btn-primary" type="submit" name="Guarda">Guarda</button>
          <br>

          @csrf

        </div>
      </form>

    </div>

  </div>
@endsection
