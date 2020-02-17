<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\cliente;


class seguimiento extends Model
{

  public function cliente (){
  //  return $this->hasMany(evento::class);
  return $this->belongsTo('App\cliente','id')->orderBy('id', 'DESC')->get();
}


    //
}
