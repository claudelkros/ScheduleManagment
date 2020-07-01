<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Semestre extends Model
{
    public function niveau(){
        return $this->belongsTo('App\Niveau');
    }

    public function ues(){
        return $this->hasMany('App\UE');
    }
}
