<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\cliente;
use App\localentrega;

class LocalEntregaController extends Controller
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
         return view ('localentrega.index', ['localentregas' => localentrega::all()]);
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(cliente $cliente)
    {
      $cliente = cliente::all();
      $localentrega = localentrega::all();
      return view ('localentrega.create', ['clientes' => $cliente, 'localentregas' => $localentrega]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(cliente $cliente, Request $request)
    {
      {
        $DaliData = $request->validate([
          'nombreentrega' => 'required|min:4',
          'direc' => 'required',
          'cliente_id' => 'required'
       ]);

        $localentrega = new localentrega ();
        $localentrega-> nombreentrega = $request->get('nombreentrega');
        $localentrega-> direc = $request->get('direc');
        $localentrega-> cliente_id = $request->get('cliente_id');
        $localentrega-> save();
        return redirect('/localentrega');
      }


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
