<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Opinione;

class Monumento extends Model
{
    public function opinione () {
      return $this->hasMany(Opinione::class);
    }

    /**
    *Save an opinion associated to a monument.
    *
    *@param $opinione Opinione Object
    */
    public function addOpinione (Opinione $opinione) {
      return $this->opinione()->save($opinione);
    }
}
