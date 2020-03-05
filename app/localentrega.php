<?php

namespace App;
use App\seguimiento;

use Illuminate\Database\Eloquent\Model;

class localentrega extends Model
{

  public function seguimientos (){

    return $this->hasMany('App\seguimiento','localentrega_id')->orderBy('id', 'DESC')->get();
  }//
}
