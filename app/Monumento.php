<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Opinione;

class Monumento extends Model
{
    public function opinione ()
    {
      return $this->hasMany(Opinione::class);
    }

    /**
    *Save an opinion associated to a monument.
    *
    *@param $opinione Opinione Object
    *@param $id identify Usser Object
    */
    public function addOpinione (Opinione $opinione, $id)
    {

      $opinione->usser_id = $id;

      return $this->opinione()->save($opinione);
    }
}
