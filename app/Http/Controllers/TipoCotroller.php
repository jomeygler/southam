<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
 use App\Http\Controllers\ArcticuloController;
 use App\Articulo;
 use App\tipo;

class TipoCotroller extends Controller
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
      return view ('tipo.index', [
    'tipo' => tipo::all()
     ]);
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view ('tipo.create');
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
      $DaliData = $request->validate([
        'nombre' => 'required|min:4',


     ]);
      $tipo = new tipo ();
     $tipo-> nombre = $request->get('nombre');

  //  $funcionario-> sexo = $request->get('sexo');
  //   $funcionario-> departamento_id = $request->get('departamento_id');
    //  $funcionario->departamento_id = $departamentos[id];
      $tipo-> save ();
      return redirect('/tipo');
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
