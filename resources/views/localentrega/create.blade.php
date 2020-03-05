@extends('layout.base')

@section('content')
<link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
  <div class="row">
      <div class="col">
          <h1>Nueva local</h1>
          <br>
          <a class="btn btn-primary" href="/localentrega">Regresa</a>
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
      <form class="form-horizontal" action="/localentrega" method="POST">

        <div class="form-group">
          <label for="nombre">Nombre</label>
          <br>
          <input type="text" class="form-control" id="nombreentrega"  name="nombreentrega" value="">
          <br>
          <label for="nombre">Direcion</label>
          <br>
          <input type="text" class="form-control" id="direc"  name="direc" value="">
          <br>
          <label for="Fecha">fecha</label>
          <br>
          <input type="date" class="form-control" id="fecha"  name="fecha" value="2017-11-31">
          <br>
          <div class="row">
                <div class="col">
                  <label for="">Cliente</label>
                  <select class="form-control" name="cliente_id" id="cliente_id">
                       @foreach($clientes as $cliente)
         <option value="{{$cliente['id']}}">{{$cliente['cli_des']}}</option>
                       @endforeach
                       </select>
                  <br>
                </div>
                </div>
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
