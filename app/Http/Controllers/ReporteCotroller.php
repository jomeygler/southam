<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use App\Http\Controllers\TiempoController;
use Illuminate\Support\Facades\DB;
use App\Tiempos;
use App\Articulo;
//use DB;
use Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\ReportesExport;


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
//  $data = DB::select("call r_tiempos(?, ?)", array($inicio, $fin));
return view('reportes.rtiempos');
}
public function rtiemposc(Request $request, Tiempos $tiempos )
{

//return view('reportes.rtiemposc' ,['Tiempos' => Tiempos::select("tiempos.*")
//           ->whereBetween('inicio', [Request('inicio'), Request('fin')])->get()]);

return view('reportes.rtiemposc' ,['Tiempos' =>Tiempos::join('articulos', 'articulos.id', '=' ,'tiempos.articulo_id')
                                                ->select('tiempos.*', 'articulos.nombre as nombredeart')
                                                ->whereBetween('inicio', [Request('inicio'), Request('fin')])->get()]);
//return  Tiempos::select("tiempos.*" )->whereBetween('inicio', [Request('inicio'), Request('fin')])->get();
//return  Request::all();

}
public function export(){
        return Excel::download(new ReportesExport, 'reporte_tiempos.xlsx');
    //  $tiempos = Tiempos::select("tiempos.*")
    //             ->whereBetween('inicio', [Request('inicio'), Request('fin')])->get();
//        return Excel::download(new $datos, 'reporte_tiempos.xlsx');
//return var_dump([Request('fin')]);
    }
    //
}
