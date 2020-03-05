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
              <a class="btn btn-info" href="{{ url('export2') }}">
              Export File</a>
               <br>
            </div>
          </div>
          <table class="table table-striped">
          <thead class="thead-dark">
            <th>ID</th>
            <th>lOCAL</th>
            <th>NRO_ORDEN</th>
            <th>UNI_EMPAQUE</th>
            <th>UNI_PEDIDO</th>
            <th>FACT</th>
            <th>CORRELATIVOS</th>
            <th>LOTE</th>
            <th>ELABORACION</th>
            <th>PEDIDO</th>
          </thead>
              @foreach($seguimientos as $seguimiento)
                  <tr>
                      <td>{{ $seguimiento->id }}</td>
                      <td>{{ $seguimiento->nomentrega }}</td>
                      <td>{{ $seguimiento->nro_orden }}</td>
                      <td>{{ $seguimiento->uni_emq }}</td>
                      <td>{{ $seguimiento->uni_ped }}</td>
                      <td>{{ $seguimiento->fact }}</td>
                      <td>{{ $seguimiento->correlativo }}</td>
                      <td>{{ $seguimiento->lote }}</td>
                      <td>{{ $seguimiento->fecha_ela }}</td>
                      <td>{{ $seguimiento->fecha_desp }}</td>

                  </tr>
              @endforeach
          </table>
      </div>
      <br>
  </div>
@endsection
