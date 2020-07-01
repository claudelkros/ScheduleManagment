<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Salle extends Model
{
    public function faculte(){
        return $this->belongsTo('App\Faculte');
    }
}
