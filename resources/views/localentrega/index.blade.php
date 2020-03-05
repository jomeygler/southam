@extends('layout.base')

@section('content')
  <div class="row">
      <div class="col">
          <h1>Locales</h1>
          <br>
          <a class="btn btn-primary" href="/localentrega/create">Nuevo</a>
           <br>

           <table class="table table-striped">
           <thead class="thead-dark">
             <th>NOMBRE</th>
             <th>EDITAR</th>
             <th>ELIMINAR</th>
           </thead>
              @foreach($localentregas as $localentrega)
                  <tr>
                      <td><a href="/localentrega/{{ $localentrega->id }}">{{ $localentrega->nombreentrega }}</a></td>
                      <td> <a class="btn btn-primary" href="/localentrega/{{$localentrega->id}}/edit">Editar</a></td>
                        <td> <a class="btn btn-primary" href="/localentrega/{{$localentrega->id}}/ConfirmaD">eliminar</a></td>
                  </tr>
              @endforeach
          </table>
      </div>
  </div>
@endsection
