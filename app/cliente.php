<?php

namespace App;
use App\tipo_cliente;
use App\seguimiento;

use Illuminate\Database\Eloquent\Model;

class cliente extends Model
{
  public function tipo_cliente (){
  //  return $this->hasMany(evento::class);
  return $this->belongsTo('App\tipo_cliente','id')->orderBy('id', 'DESC')->get();
  }

public function seguimientos (){

  return $this->hasMany('App\seguimiento','id')->orderBy('id', 'DESC')->get();
}
    //
}
