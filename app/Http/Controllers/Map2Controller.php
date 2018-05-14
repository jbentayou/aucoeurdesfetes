<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Map;
use App\Contenu;
use App\Festayre;
use App\Famille;
use App\Enfant;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\ParcFestayre;
use App\ParcFamille;
use App\ParcEnfant;
use App\Monument;

class Map2Controller extends Controller
{
    public function index($n){
        $data = Contenu::all();
        $monuments = Monument::all();
        return view('CarteV2', array(
            'data' => $data,
            'monuments' => $monuments
        ))->with('avatar', $n);
    }
    
    public function indexID($n, $p, $k){
        if($p == 'Festayre'){
            $data = ParcFestayre::all();
        }
        elseif($p == 'Famille'){
            $data = ParcFamille::all();
        }
        elseif($p == 'Enfant'){
            $data = ParcEnfant::all();
        }
        $monuments = Monument::all();
        return view('CarteID', array(
            'data' => $data,
            'monuments' => $monuments
        ))->with('avatar', $n)->with('idSelected', $k)->with('parcours', $p);
    }
    
    
}
