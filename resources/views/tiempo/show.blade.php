@extends('layouts.base')

@section('content')
  <div class="row">
      <div class="col">
          <h1>Tiempos </h1>
          <br>
          <a class="btn btn-primary" href="/tiempo">Regresa</a>
           <br>
          <table class="table">
          </table>
      </div>
  </div>
  <div class="row">
    <div class="col">


<div class="row">
   <div class="col">
       <h3>Details</h3>
       <table class="table">
           @foreach(tiempos as $tiempo => $row)
               <tr>
                   <td><a>{{ $row->id }}</a></td>
                   <td>{{ $tiempo->inicio }}</td>
                   <td>{{ $tiempo->fin }}</td>
               </tr>
           @endforeach
       </table>
   </div>
</div>
<div class="row">
   <div class="col">
       <a class="btn btn-primary" href="/funcionario/{{ $persona->id }}/eventos/create">Nuevo evento</a>
   </div>
</div>
@endsection
