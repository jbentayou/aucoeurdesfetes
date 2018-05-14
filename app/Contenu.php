<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contenu extends Model
{
    public function festayre(){
        return $this->hasOne('App\Festayre');
    }
    public function famille(){
        return $this->hasOne('App\Famille');
    }
    public function enfant(){
        return $this->hasOne('App\Enfant');
    }
}
