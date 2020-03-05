<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\cliente;
use App\localentrega;

class rseguimiento extends Model
{
  public function cliente (){
  //  return $this->hasMany(evento::class);
  return $this->hasMany('App\cliente','id');
  }

  public function localentrega (){
  //  return $this->hasMany(evento::class);
  return $this->belongsTo('App\localentrega','id');
  }
    //
}
