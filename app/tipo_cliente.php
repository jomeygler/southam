<?php

namespace App;
use App\cliente;

use Illuminate\Database\Eloquent\Model;

class tipo_cliente extends Model
{
  public function clientes (){
  //  return $this->hasMany(evento::class);
  return $this->hasMany('App\cliente','tipo_cli');
  }
    //
}
