<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Faculte extends Model
{
    public function user(){
        return $this->belongsTo('App\User');
    }

    public function departements(){
        return $this->hasMany('App\Departement');
    }

    public function salles(){
        return $this->hasMany('App\Salle');
    }

}
