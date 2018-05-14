<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ParcFestayre extends Model
{
    public function videoS(){
        return $this->belongsTo('App\Contenu', 'video', 'id');
    }
}
