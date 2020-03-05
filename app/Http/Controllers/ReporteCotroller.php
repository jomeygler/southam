<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use App\Http\Controllers\TiempoController;
use Illuminate\Support\Facades\DB;
use App\Tiempos;
use App\Articulo;
use App\seguimiento;
use App\rseguimiento;
//use DB;
use Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\ReportesExport;
use App\Exports\seguimientoExport;

class ReporteCotroller extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }

  public function index()
  {
  return view('reportes.index');
}

public function rtiempos()
{
return view('reportes.rtiempos');
}
public function rtiemposc(Request $request, Tiempos $tiempos)
{
//aqui comienza el reporte de los tuneles
return view('reportes.rtiemposc' ,['Tiempos' =>Tiempos::join('articulos', 'articulos.id', '=' ,'tiempos.articulo_id')
                                                ->select('tiempos.*', 'articulos.nombre as nombredeart', 'categorias.nombre as nombrecat')
                                                ->join ('categorias', 'categorias.id', '=' ,'articulos.categoria')
                                                ->whereBetween('inicio', [Request('inicio'), Request('fin')])->get()]);
}
public function export(){
        return Excel::download(new ReportesExport, 'reporte_tiempos.xlsx');

    }
    //aqui termina reporte de los tuneles
//
//
///aqui comienza el reporte de los seguimientos
public function rseguit()
{
return view('reportes.rseguit');
}
public function rseguimiento(Request $request, seguimiento $seguimiento)
{
return view('reportes.rseguimiento' ,['seguimientos' => seguimiento::join('clientes', 'clientes.id', '=' ,'seguimientos.cliente_id')
                                       ->select('seguimientos.*', 'clientes.cli_des as nomcliente', 'localentregas.nombreentrega as nomentrega')
                                       ->join('localentregas', 'localentregas.id', '=', 'seguimientos.localentrega_id')
                                       ->whereBetween('fecha_ela', [Request('inicio'), Request('fin')])->get()]);


}
public function export2(){
        return Excel::download(new seguimientoExport, 'reporte_seguimiento.xlsx');
}
}
