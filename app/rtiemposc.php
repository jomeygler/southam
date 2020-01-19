<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Tiempos;
use App\Articulos;

class rtiemposc extends Model
{
  public function tiempos (){
  //  return $this->hasMany(evento::class);
  return $this->hasMany('App\Tiempos','id');
  }

  public function articulos (){
  //  return $this->hasMany(evento::class);
  return $this->belongsTo('App\Articulos','id');
  }
    //
}
