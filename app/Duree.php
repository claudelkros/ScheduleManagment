<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Duree extends Model
{
    public function ue(){
        return $this->belongsTo('App\UE');
    }
}
