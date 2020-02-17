<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\seguimiento;
use App\cliente;

class SeguimientoController extends Controller
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
              return view ('seguimiento.index', ['seguimiento' =>seguimiento::join('clientes', 'clientes.id', '=' ,'seguimientos.cliente_id')
             ->select('seguimientos.*',  'clientes.cli_des as nombrecliente')
             ->orderBy('fecha_desp', 'DESC')
             ->paginate(15)
             ]);
}
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(cliente $cliente)
    {

      $cliente = cliente::all();
      return view ('seguimiento.create',['clientes'=>$cliente ]);
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(cliente $cliente, Request $request)
    {

      $DaliData = $request->validate([
        'nro_orden' => 'required|min:4',
        'lote' => 'required',
        'uni_emq' => 'required',
        'uni_ped' => 'required'
     ]);
      $seguimiento = new seguimiento ();
      $seguimiento-> cliente_id = $request->get('cliente_id');
      $seguimiento-> nro_orden = $request->get('nro_orden');
      $seguimiento-> uni_emq = $request->get('uni_emq');
      $seguimiento-> uni_ped = $request->get('uni_ped');
      $seguimiento-> fact = $request->get('fact');
      $seguimiento-> lote = $request->get('lote');
      $seguimiento-> correlativo = $request->get('correlativo');
      $seguimiento-> fecha_ela = $request->get('fecha_ela');
      $seguimiento-> fecha_desp = $request->get('fecha_desp');
      $seguimiento-> descrip = $request->get('descrip');

      $seguimiento-> save ();
      return redirect('/seguimiento');

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
        //
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
        //
    }
}
