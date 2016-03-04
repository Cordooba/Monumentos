<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usser extends Model
{
    public function opiniones ()
    {

      return $this->hasMany(Opinione::class);

    }
}
