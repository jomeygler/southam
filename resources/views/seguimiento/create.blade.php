@extends('layout.base')

@section('content')
<link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
  <div class="row">
      <div class="col">
          <h1>Registro Nuevo</h1>
          <br>
          <a class="btn btn-primary" href="/seguimiento">Regresa</a>
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
      <form class="form-horizontal" action="/seguimiento" method="POST">

      <div class="form-group">
       <div class="row">
          <div class="col">
            <label for="nombre">Orden de Compra</label>
            <br>
            <input type="text" class="form-control" id="nro_orden"  name="nro_orden" value="">
            <br>
          </div>
          <div class="col">
            <label for="">Local de entrega</label>
            <select class="form-control" name="localentrega_id" id="localentrega_id">
                 @foreach($localentrega as $localentrega)
   <option value="{{$localentrega['id']}}">{{$localentrega['nombreentrega']}}</option>
                 @endforeach
                 </select>
            <br>
          </div>
          <div class="col">
            <label for="nombre">Unidad de empaque</label>
            <br>
            <input type="text" class="form-control" id="uni_emq"  name="uni_emq" value="">
            <br>
          </div>
          <div class="col">
            <label for="nombre">Unidad de Pedido</label>
            <br>
            <input type="text" class="form-control" id="uni_ped"  name="uni_ped" value="">
            <br>
          </div>

       </div>
      <div class="row">
        <div class="col">
          <label for="nombre">Factura</label>
          <br>
          <input type="text" class="form-control" id="fact"  name="fact" value="">
          <br>
        </div>
         <div class="col">
           <label for="nombre">Correlativo</label>
           <br>
           <input type="text" class="form-control" id="correlativo"  name="correlativo" value="">
           <br>
         </div>
        <div class="col">
          <label for="nombre">Numer de Lote</label>
          <br>
          <input type="text" class="form-control" id="lote"  name="lote" value="">
          <br>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <label for="nombre">Fecha Elaboracion</label>
          <br>
          <input type="date" class="form-control" id="fecha_ela"  name="fecha_ela" value="">
          <br>
        </div>
        <div class="col">
          <label for="nombre">Fecha Despacho</label>
          <br>
          <input type="date" class="form-control" id="fecha_desp"  name="fecha_desp" value="">
          <br>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <label for="nombre">comentario</label>
          <br>
          <input type="text" class="form-control" id="descrip"  name="descrip" value="">
          <br>
        </div>
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
          <button class="btn btn-primary" type="submit" name="Guarda">Guarda</button>
          <br>

          @csrf

        </div>
      </form>

    </div>

  </div>
@endsection
