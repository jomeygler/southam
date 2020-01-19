@extends('layout.base')

@section('content')
  <div class="row">
      <div class="col">
          <h1>Tipos de articulo</h1>
          <br>
          <a class="btn btn-primary" href="/tipo/create">Nuevo</a>
           <br>

           <table class="table table-striped">
           <thead class="thead-dark">
             <th>NOMBRE</th>
             <th>EDITAR</th>
             <th>ELIMINAR</th>
           </thead>
              @foreach($tipo as $Tipos)
                  <tr>
                      <td><a href="/tipo/{{ $Tipos->id }}">{{ $Tipos->nombre }}</a></td>
                      <td> <a class="btn btn-primary" href="/tipo/{{$Tipos->id}}/edit">Editar</a></td>
                        <td> <a class="btn btn-primary" href="/tipo/{{$Tipos->id}}/ConfirmaD">eliminar</a></td>
                  </tr>
              @endforeach
          </table>
      </div>
  </div>
@endsection
