<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Parcours extends Model
{
    public function cycles(){
        return $this->belongsToMany('App\Cycle');
    }

    public function niveaux(){
        return $this->belongsToMany('App\Niveau');
    }
}
