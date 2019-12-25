<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Controllers\TipoCotroller;
use App\Articulo;
use App\tipo;
use App\Categoria;
use App\Tiempos;
use App\Tunel;

class ArcticuloController extends Controller
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
      return view ('articulo.index', [
    'articulos' => articulo::all()
     ]);
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(tipo $tipo)
    {           $tipo = tipo::all();
                $Categoria = categoria::all();
            // $funcionario= funcionario::findorfail($id);
              // return view ('funcionario.create', compact ('departamentos'));
              //  return view ('articulo.create', ;
return view ('articulo.create', ['tipos' => $tipo, 'categorias' => $Categoria]);
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(tipo $tipo, Categoria $Categoria, Request $request)
    {
      $DaliData = $request->validate([
        'nombre' => 'required|min:4',
        'fecha' => 'required',
        'tipo' => 'required',
        'categoria' => 'required'

     ]);
      $articulo = new articulo ();
     $articulo-> nombre = $request->get('nombre');
     $articulo-> fecha = $request->get('fecha');
      $articulo-> tipo = $request->get('tipo');
      $articulo-> categoria = $request->get('categoria');
      $articulo-> costo = $request->get('costo');
      $articulo-> tipo = $request->get('tipo');
      $articulo-> categoria = $request->get('categoria');
      $articulo-> save ();
      return redirect('/articulo');  //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

      //   $funcionario= funcionario::findorfail($id);
             return view('/articulo.show', [
               'articulo' => $articulo
             ]);
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

      $articulo= Articulo::findorfail($id);
            return view('/articulo.edit', [
              'articulo' => $articulo
            ]);
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
      $articulo= Articulo::findorfail($id);
      $articulo-> nombre = $request->get('nombre');
      $articulo-> save ();
      return redirect('/articulo');
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
      $articulo= Articulo::findorfail($id);
          $articulo->delete ();
          return redirect('/articulo');
                //
    }

    public function ConfirmaD($id)
    {
      $articulo= articulo::find($id);
      return view('/articulo.confirmad', [
      'articulo' => $articulo
    ]);
    }
}
