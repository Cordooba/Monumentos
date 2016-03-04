<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Opinione extends Model
{
  protected $fillable = ['mensaje'];

  public function monumento ()
  {

    return $this->belongsTo(Monumento::class);

  }

  public function usser ()
  {

    return $this->belongsTo(Usser::class);

  }

}
