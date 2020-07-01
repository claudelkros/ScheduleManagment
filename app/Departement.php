<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Departement extends Model
{

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function cycles(){
        return $this->hasMany('App\Cycle');
    }

    public function faculte(){
        return $this->belongsTo('App\Faculte');
    }

    
}
