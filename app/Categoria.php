<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Articulo;

class Categoria extends Model
{
  
    public function articulos (){
    //  return $this->hasMany(evento::class);
    return $this->hasMany('App\Articulo','categoria');
    }
    //
}
