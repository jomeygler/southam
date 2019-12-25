<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tunel;
use App\Tiempos;

class TunelController extends Controller
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
      return view ('tunel.index',
      ['tunels' => tunel::all()
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
           return view ('tunel.create');
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
      $tunel = new tunel ();
     $tunel-> nombre = $request->get('nombre');

  //  $funcionario-> sexo = $request->get('sexo');
  //   $funcionario-> departamento_id = $request->get('departamento_id');
    //  $funcionario->departamento_id = $departamentos[id];
      $tunel-> save ();
      return redirect('/tunel');  //

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
      return view('/tunel.show', [
        'tunel' => $tunel
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
      $tunel= Tunel::findorfail($id);
            return view('/tunel.edit', ['tunel' => $tunel]);
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
      $tunel= Tunel::findorfail($id);
      $tunel-> nombre = $request->get('nombre');
      $tunel-> save ();
      return redirect('/tunel');

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
      $tunel= Tunel::findorfail($id);
          $tunel->delete ();
          return redirect('/tunel');
        //
    }
    public function ConfirmaD($id)
    {
      $tunel= tunel::find($id);
      return view('/tunel.confirmad', [
      'tunel' => $tunel
    ]);
    }
}
