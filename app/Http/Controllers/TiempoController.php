<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\TunelController;
use App\Tiempos;
use App\Tunel;
use App\Articulo;
use App\Exports\ExportTiempos;
use App\Imports\ImportTiempos;
use Maatwebsite\Excel\Facades\Excel;
use DB;


class TiempoController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
  //   return view ('tiempo.index', [$exp1 = DB::table('tiempos')
  //           ->join('articulos', 'articulos.id', '=' ,'tiempos.articulo_id')
  //           ->select('tiempos.*',  'articulos.nombre as nombredeart')
  //           ->paginate(15)
  //  'tiempos' => tiempos::orderBy('fin', 'DESC')->paginate(15)

  //   ]);
              return view ('tiempo.index', ['tiempos' =>tiempos::join('articulos', 'articulos.id', '=' ,'tiempos.articulo_id')
             ->select('tiempos.*',  'articulos.nombre as nombredeart')
             ->orderBy('fin', 'DESC')
             ->paginate(15)
             ]);
//return var_dump($tiempos);
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(tunel $Tunel)
    {
                 $Tunel = tunel::all();
                 $Articulo = articulo::all();
             // $funcionario= funcionario::findorfail($id);
               // return view ('funcionario.create', compact ('departamentos'));
               //  return view ('articulo.create', ;
 return view ('tiempo.create', ['tunel' => $Tunel, 'articulo' => $Articulo]);

        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(tunel $Tunel, articulo $Articulo, Request $request)
    {
      $DaliData = $request->validate([
        'inicio' => 'required|min:4',
        'linea' => 'required',
        'cantidad' => 'required',
        'valor' => 'required'
     ]);
      $tiempos = new tiempos ();
      $tiempos-> comentario = $request->get('comentario');
      $tiempos-> inicio = $request->get('inicio');
      $tiempos-> linea = $request->get('linea');
  //  $tiempos-> linea = $request->get('linea');
      $tiempos-> cantidad = $request->get('cantidad');
      $tiempos-> valor = $request->get('valor');
      $tiempos-> articulo_id = $request->get('articulo_id');
      $tiempos-> tunel_id = $request->get('tunel_id');
      $tiempos-> save ();
      return redirect('/tiempo');
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      //$tiempo= tiempos::findorfail($id);
       //return view('/tiempo.show', [
        // 'tiempos' => $tiempo
      // ]);

      return view('/tiempo.show', ['tiempo' => Tiempos::findOrFail($id)]);
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $tiempo= tiempos::findorfail($id);
      return view('/tiempo.edit', [
        'tiempo' => $tiempo
      ]);      //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $tiempo= tiempos::findorfail($id);
              $tiempo-> menost = $request->get('menost');
              $tiempo-> mast = $request->get('mast');
              $tiempo-> save ();
              return redirect('/tiempo');
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

      $tiempos = tiempos::findorfail($id);
      $tiempos->delete ();
      return redirect('/tiempo');
        //
    }

    //aqui comienza el codigo de exportar
    public function importExport()
   {
      return view('index');
   }

   /**
   * @return \Illuminate\Support\Collection
   */
   public function export()
   {
      //          return Excel::download(new ExportTiempos, 'actul.xlsx');
  $data = ExportTiempos::whereBetween('inicio', ['desde', 'hasta'])->get();
   return Excel::download($data, 'actul.xlsx');

   }

   /**
   * @return \Illuminate\Support\Collection
   */
   public function import()
   {
       Excel::import(new ImportTiempos, request()->file('file'));
       return back();
   }


      public function ConfirmaD($id)
    {
      $tiempo= tiempos::find($id);
      return view('/tiempo.confirmad', [
      'tiempo' => $tiempo
    ]);
}
}
