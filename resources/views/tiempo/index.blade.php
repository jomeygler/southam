@extends('layout.base')

@section('content')
  <div class="row">
      <div class="col">
          <h1>Tiempos En Tunel</h1>
           <br>
           <a class="btn btn-primary" href="/tiempo/create">Nuevo</a>
           <br>
           <br>
          <table class="table table-striped">
          <thead class="thead-dark">
                   <th>ID</th>
                   <th>INICIO</th>
                   <th>FIN</th>
                   <th>PRODUCTO</th>
                   <th>LINEA</th>
                   <th>MENOS</th>
                   <th>MAS</th>
                   <th>MODIFICAR TIEMPO</th>
                   <th>ELIMINAR</th>
          </thead>
                      @foreach($tiempos as $tiempo => $row)
                  <tr>
                      <td><a href="/tiempo/{{ $row->id }}">{{ $row->id }}</a></td>
                      <td><a href="/tiempo/{{ $row->id }}">{{ $row->inicio }}</a></td>
                      <td><a href="/tiempo/{{ $row->id }}">{{ $row->fin }}</a></td>
                      <td> <a href="/tiempo/{{ $row->id }}">{{ $row->nombredeart }}</a></td>
                      <td><a href="/tiempo/{{ $row->id }}">{{ $row->linea }}</a></td>
                      <td><a href="/tiempo/{{ $row->id }}">{{ $row->menost }}</a></td>
                      <td><a href="/tiempo/{{ $row->id }}">{{ $row->mast }}</a></td>
                      <td> <a class="btn btn-primary" href="/tiempo/{{$row->id}}/edit">Modificar Tiempo</a></td>
                      <td> <a class="btn btn-primary" href="/tiempo/{{$row->id}}/ConfirmaD">eliminar</a></td>


                          </a></td>
                  </tr>
              @endforeach
          </table>
      </div>

      <br>
  </div>
@endsection
