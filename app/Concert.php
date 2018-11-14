<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Concert extends Model
{
    public function salle()
  {
      return $this->belongsTo('App\Salle');
  }
  public function lieu()
  {
      return $this->belongsTo('App\Lieu');
  }
}
