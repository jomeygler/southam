<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Tiempos;

class rtiemposc extends Model
{
  public function tiempos (){
  //  return $this->hasMany(evento::class);
  return $this->hasMany('App\Tiempos','id');
  }
    //
}
