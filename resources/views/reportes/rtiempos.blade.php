@extends('layout.base')

@section('content')
  <div class="row">
      <div class="col">
          <h1>Reportes</h1>
          <br>
          <a class="btn btn-primary" href="/reportes">volver</a>
           <br>

           <div class="row">
             <div class="col">
               @if($errors->any())
                         <div class="alert alert-danger">
                             <ul>
                                 @foreach($errors->all() as $error)
                                     <li>{{ $error }}</li>
                                 @endforeach
                             </ul>
                         </div>
                     @endif
               <form class="form-horizontal" action="/reportes/rtiemposc" method="POST">

                 <div class="form-group">
                   <label for="inicio">inicio</label>
                   <br>
                   <input type="date" class="form-control" id="inicio"  name="inicio" value="">
                   <br>
                   <label for="final">fin</label>
                   <br>
                   <input type="date" class="form-control" id="fin"  name="fin" value="">
                   <br>
                   <br>
                   <button class="btn btn-primary" type="submit" name="Consulta">Consulta</button>
                   <br>
                   @csrf

                 </div>
               </form>

             </div>

           </div>
      </div>
  </div>
@endsection
