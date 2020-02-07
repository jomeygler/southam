@extends('layout.base')

@section('content')
  <div class="row">
      <div class="col">
          <h1>Tipo Clientes</h1>
          <br>
          <a class="btn btn-primary" href="/tipo_cliente/create">Nuevo</a>
           <br>
           <br>
           <table class="table table-striped">
           <thead class="thead-dark">
             <th>NOMBRE</th>
             <th>EDITAR</th>
             <th>ELIMINAR</th>
           </thead>
              @foreach($tipo_clientes as $tipo_cliente)
                  <tr>
                      <td><a href="/tipo_cliente/{{ $tipo_cliente->id }}">{{ $tipo_cliente->nombre }}</a></td>
                      <td> <a class="btn btn-primary" href="/tipo_cliente/{{$tipo_cliente->id}}/edit">Editar</a></td>
                        <td> <a class="btn btn-primary" href="/tipo_cliente/{{$tipo_cliente->id}}/ConfirmaD">eliminar</a></td>
                  </tr>
              @endforeach
          </table>
      </div>
  </div>
@endsection
