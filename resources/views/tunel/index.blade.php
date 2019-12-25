@extends('layout.base')

@section('content')
  <div class="row">
      <div class="col">
          <h1>Articulos</h1>
          <br>
          <a class="btn btn-primary" href="/tunel/create">Nuevo</a>
           <br>
          <table class="table">
              @foreach($tunels as $Tunel)
                  <tr>
                      <td><a href="/tunel/{{ $Tunel->id }}">{{ $Tunel->nombre }}</a></td>
                      <td> <a class="btn btn-primary" href="/tunel/{{$Tunel->id}}/edit">Editar</a></td>
                        <td> <a class="btn btn-primary" href="/tunel/{{$Tunel->id}}/ConfirmaD">eliminar</a></td>
                  </tr>
              @endforeach
          </table>
      </div>
  </div>
@endsection
