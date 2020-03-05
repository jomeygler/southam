<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\cliente;
use App\localentrega;


class seguimiento extends Model
{
protected $guarded = [];
  public function cliente (){
  //  return $this->hasMany(evento::class);
  return $this->belongsTo('App\cliente','id')->orderBy('id', 'DESC')->get();
}

public function localentrega (){
//  return $this->hasMany(evento::class);
return $this->belongsTo('App\localentrega','id')->orderBy('id', 'DESC')->get();
}


    //
}
