@extends('layout.base')

@section('content')
<link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
  <div class="row">
      <div class="col">
          <h1>Nuevo registro</h1>
          <br>
          <a class="btn btn-primary" href="/tiempo">Regresa</a>
           <br>
           <br>
      </div>
  </div>
  <div>

      @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
      <form class="form-horizontal" action="/tiempo" method="POST">

      <div class="form-group">

      <div class="row">
          <div class="col">
            <label for="nombre">Hora de Inicio</label>
          <input type="datetime-local" class="form-control" id="inicio"  name="inicio" value="" placeholder="inicio">
          </div>
          <div class="col">
          <label for="nombre">Tiempo</label>
          <input type="time" class="form-control" id="linea"  name="linea" value="" placeholder="linea">
          </div>
    </div>
    <div class="row">
         <div class="col">
           <br>
           <label for="nombre">Cantidadd</label>
           <br>
           <input type="number" class="form-control" id="cantidad"  name="cantidad" value="">
         </div>
         <div class="col">
           <br>
           <label for="nombre">Valor</label>
           <br>
           <input type="decimal" class="form-control" id="valor"  name="valor" value="">
           <br>
          </div>
    </div>
    <div class="row">
          <div class="col">
            <label for="">Tuneles</label>
            <select class="form-control" name="tunel_id" id="tunel_id">
                 @foreach($tunel as $tunel)
   <option value="{{$tunel['id']}}">{{$tunel['nombre']}}</option>
                 @endforeach
                 </select>
            <br>
          </div>
          <div class="col">

            <label for="">Productos</label>
            <select class="form-control" name="articulo_id" id="articulo_id">
                 @foreach($articulo as $articulo)
            <option value="{{$articulo['id']}}">{{$articulo['nombre']}}</option>
                 @endforeach
                 </select>
            <br>
          </div>
    </div>
    <div class="row">
        <br>
        <label for="nombre">Comentario</label>
        <br>
        <input type="text" class="form-control" id="comentario"  name="comentario" value="">
    </div>
        <br>
        <button class="btn btn-primary" type="submit" name="Guarda">Guarda</button>
        <br>
          @csrf
    </div>
      </form>
      <br>
      <br>
    </div>
@endsection
