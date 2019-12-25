@extends('layout.base')

@section('content')
  <div class="row">
      <div class="col">
          <h1>Reportes</h1>
          <br>
          <div class="row">
            <div class="col">
              <a class="btn btn-primary" href="/reportes">regresas</a>
              <br>
              <br>
            </div>
            <div class="col">
              <a class="btn btn-info" href="{{ url('export') }}">
              Export File</a>
               <br>
            </div>
          </div>
          <table class="table">
            <th>ID</th>
            <th>INICIO</th>
            <th>FIN</th>
            <th>LINEA</th>
            <th>MENOS</th>
            <th>MAS</th>
            <th>COMENTARIOS</th>
              @foreach($Tiempos as $tiempo)
                  <tr>
                      <td>{{ $tiempo->id }}</td>
                      <td>{{ $tiempo->inicio }}</td>
                      <td>{{ $tiempo->fin }}</td>
                      <td>{{ $tiempo->linea }}</td>
                      <td>{{ $tiempo->menost }}</td>
                      <td>{{ $tiempo->mast }}</td>
                      <td>{{ $tiempo->comentario }}</td>

                  </tr>
              @endforeach
          </table>
      </div>
      <br>
  </div>
@endsection
