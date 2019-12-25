@extends('layout.base')

@section('content')
  <div class="row">
      <div class="col">
          <h1>categoria</h1>
          <br>
          <a class="btn btn-primary" href="/categoria/create">Nuevo</a>
           <br>
          <table class="table">
              @foreach($categorias as $Categorias)
                  <tr>
                      <td><a href="/tipo/{{ $Categorias->id }}">{{ $Categorias->nombre }}</a></td>
                      <td> <a class="btn btn-primary" href="/tipo/{{$Categorias->id}}/edit">Editar</a></td>
                        <td> <a class="btn btn-primary" href="/tipo/{{$Categorias->id}}/ConfirmaD">eliminar</a></td>
                  </tr>
              @endforeach
          </table>
      </div>
  </div>
@endsection
