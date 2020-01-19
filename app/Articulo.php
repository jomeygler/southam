<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\tipo;
use App\Categoria;
use App\Tiempos;
use App\rtiemposc;

class Articulo extends Model
{
  public function tipo (){
 //  return $this->hasMany(evento::class);
 return $this->belongsTo('App\tipo','id');
 }

 public function categoria (){
//  return $this->hasMany(evento::class);
return $this->belongsTo('App\Categoria','id');
}

public function tiempos (){
//  return $this->hasMany(evento::class);
return $this->hasMany('App\Tiempos','articulo_id');
}
    //
}
