<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cycle extends Model
{
    public function departement(){
        return $this->belongsTo('App\Departement');
    }

    public function niveaux(){
        return $this->hasMany('App\Niveau');
    }
    public function parcours(){
        return $this->belongsToMany('App\Parcours');
    }
}
