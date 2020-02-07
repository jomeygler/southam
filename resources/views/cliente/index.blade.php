@extends('layout.base')

@section('content')
  <div class="row">
      <div class="col">
          <h1>Clientes</h1>
          <br>
          <a class="btn btn-primary" href="/cliente/create">Nuevo</a>
           <br>

           <table class="table table-striped">
           <thead class="thead-dark">
             <th>NOMBRE</th>
             <th>EDITAR</th>
             <th>ELIMINAR</th>
           </thead>
              @foreach($clientes as $cliente)
                  <tr>
                      <td><a href="/cliente/{{ $cliente->id }}">{{ $cliente->cli_des }}</a></td>
                      <td> <a class="btn btn-primary" href="/cliente/{{$cliente->id}}/edit">Editar</a></td>
                        <td> <a class="btn btn-primary" href="/cliente/{{$cliente->id}}/ConfirmaD">eliminar</a></td>
                  </tr>
              @endforeach
          </table>
      </div>
  </div>
@endsection
