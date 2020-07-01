<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Niveau extends Model
{
    public function parcours(){
        return $this->belongsToMany('App\Parcours');
    }

    public function semestres(){
        return $this->hasMany('App\Semestre');
    }
}
