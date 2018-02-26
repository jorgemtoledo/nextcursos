<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contato extends Model
{
  public function list()
  {
      return (object) [
        'nome'=>'Jorge',
        'tel'=>'67888999'
    ];
  }
}
