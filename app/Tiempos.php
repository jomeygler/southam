<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Articulo;
use App\Tunel;
use App\rtiemposc;


class Tiempos extends Model
{
public function ordenar (){

  return $tiempo = DB::tiempos('tiempos')->orderBy('id', 'DESC')->get();
 }
  public function articulo (){
  //  return $this->hasMany(evento::class);
  return $this->belongsTo('App\Articulo','id')->orderBy('id', 'DESC')->get();
  }
  public function tunel (){
  //  return $this->hasMany(evento::class);
  return $this->belongsTo('App\Tunel','id')->orderBy('id', 'DESC')->get();
  }


    //
}
