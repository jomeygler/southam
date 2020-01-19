@extends('layout.base')

@section('content')
  <div class="row">
      <div class="col">
          <h1>productos</h1>
          <br>
          <a class="btn btn-primary" href="/articulo/create">Nuevo</a>
           <br>
           <table class="table table-striped">
           <thead class="thead-dark">
             <th>PRODUCTO</th>
             <th>EDITAR</th>
             <th>ELIMINAR</th>              
             </thead>
              @foreach($articulos as $Articulo)
                  <tr>
                      <td><a href="/articulo/{{ $Articulo->id }}">{{ $Articulo->nombre }}</a></td>
                      <td> <a class="btn btn-primary" href="/articulo/{{$Articulo->id}}/edit">Editar</a></td>
                        <td> <a class="btn btn-primary" href="/articulo/{{$Articulo->id}}/ConfirmaD">eliminar</a></td>
                  </tr>
              @endforeach
          </table>
      </div>
  </div>
@endsection
