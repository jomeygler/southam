<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tipo_cliente;
use App\cliente;

class TipoClienteController extends Controller
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
      return view ('tipo_cliente.index', ['tipo_clientes' => tipo_cliente::all()]);
        //
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $tipo_cliente = tipo_cliente::all();
      return view ('tipo_cliente.create', ['tipo_cliente' => $tipo_cliente]);

        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      {
        $DaliData = $request->validate([
          'nombre' => 'required|min:4',

       ]);
       $tipo_cliente = new tipo_cliente ();
       $tipo_cliente-> nombre = $request->get('nombre');
       $tipo_cliente-> dato1 = $request->get('dato1');
       $tipo_cliente-> save ();
        return redirect('/tipo_cliente');  //
      }

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
