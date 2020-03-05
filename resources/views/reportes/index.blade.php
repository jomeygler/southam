@extends('layout.base')

@section('content')
  <div class="row">
      <div class="col">
          <h1>Reportes</h1>
          <br>

          <table class="table table-striped">
          <thead class="thead-dark">
          <th>---</th>
          <thead>

                  <tr>
                    <div class="row">
                       <td><a href="/reportes/rtiempos">Tiempos en los tuneles</a></td>
                    </div>
                    <div class="row">
                       <td><a href="/reportes/rseguit">Seguimiento</a></td>  
                    </div>

                  </tr>

          </table>
      </div>
  </div>
@endsection
