@extends('layout.base')

@section('content')
  <div class="row">
      <div class="col">
          <h1>Articulos</h1>
          <br>
          <a class="btn btn-primary" href="/seguimiento/create">Nuevo</a>
           <br>
           <br>
            <table class="table table-striped">
            <thead class="thead-dark">
            <th>NOMBRE</th>
            <th>DESCRIPCION</th>
            <th>EDITAR</th>
            <th>ELIMINAR</th>
            <thead>
              @foreach($seguimiento as $seguimiento)
                  <tr>
                      <td><a href="/seguimiento/{{ $seguimiento->id }}">{{ $seguimiento->id }}</a></td>
                      <td><a href="/seguimiento/{{ $seguimiento->descrip }}">{{ $seguimiento->descrip }}</a></td>
                      <td> <a class="btn btn-primary" href="/seguimiento/{{$seguimiento->id}}/edit">Editar</a></td>
                        <td> <a class="btn btn-primary" href="/seguimiento/{{$seguimiento->id}}/ConfirmaD">eliminar</a></td>
                  </tr>
              @endforeach
          </table>
      </div>
  </div>
@endsection
