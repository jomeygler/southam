@extends('layout.base')

@section('content')
  <div class="row">
      <div class="col">
          <h1>Modifica tiempos</h1>
          <br>
          <a class="btn btn-primary" href="/tiempo">Regresa</a>
           <br>
          <table class="table">
          </table>
      </div>
  </div>
  <div class="row">
    <div class="col">
      <form class="form-horizontal" action="/tiempo/{{$tiempo->id}}" method="POST">

        <div class="form-group">
          <label for="nombre">menost {{$tiempo->id}}</label>
          <br>
          <input type="time" class="form-control" id="menost"  name="menost" value="">
          <br>
          <label for="nombre">mast {{$tiempo->id}}</label>
          <br>
          <input type="time" class="form-control" id="mast"  name="mast" value="">
          <br>
          <button class="btn btn-primary" type="submit" name="Guarda">Guarda</button>
            @csrf
            @method('put')
        </div>
      </form>

    </div>

  </div>
@endsection
