<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Tiempos;


class Tunel extends Model
{
  public function tiempos (){
  //  return $this->hasMany(evento::class);
  return $this->hasMany('App\Tiempos','tunel_id');
    //
}
}
