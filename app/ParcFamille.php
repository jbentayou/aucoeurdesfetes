<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ParcFamille extends Model
{
    public function videoS(){
        return $this->belongsTo('App\Contenu', 'video', 'id');
    }
}
