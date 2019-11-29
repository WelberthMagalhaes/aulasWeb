<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cidade extends Model
{

  //Lista dos campos que podem ser gravados com o mass assigment
  protected $fillable = [ 'nome', 'estado_id'];

  public function estado()
  {
    return $this->belongsTo('App\Estado');
  }
}
