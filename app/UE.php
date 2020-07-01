<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UE extends Model
{
   public function semestre(){
       return $this->belongsTo('App\Semestre');
   }

   public function duree(){
       return $this->hasOne('App\Duree');
   }
    
}
