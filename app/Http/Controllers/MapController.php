<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
//use App\Map;
use App\Contenu;

class MapController extends Controller
{
    public function index($n){
        $data = Contenu::all();
        return view('Carte', array(
            'data' => $data
        ))->with('avatar', $n);
    }
}
