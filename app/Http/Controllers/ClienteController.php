<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\TipoClienteController;
use App\cliente;
use App\tipo_cliente;

class ClienteController extends Controller
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
      return view ('cliente.index', ['clientes' => cliente::all()]);
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(tipo_cliente $tipo_cliente)
    {
        $cliente = cliente::all();
        $tipo_cliente = tipo_cliente::all();
        return view ('cliente.create', ['clientes' => $cliente, 'tipo_cliente' => $tipo_cliente]);

        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(tipo_cliente $tipo_cliente, Request $request )
    {
      {
        $DaliData = $request->validate([
          'cli_des' => 'required|min:4',
          'fecha' => 'required',
          'direccion' => 'required'

       ]);
        $cliente = new cliente ();
        $cliente-> cli_des = $request->get('cli_des');
        $cliente-> fecha = $request->get('fecha');
        $cliente-> rut = $request->get('rut');
        $cliente-> tipo_cli = $request->get('tipo_cli');
        //$cliente-> costo = $request->get('costo');
        $cliente-> direccion = $request->get('direccion');
        $cliente-> save ();
        return redirect('/cliente');  //
      }//
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
