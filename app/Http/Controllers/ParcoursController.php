<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Festayre;
use App\Famille;
use App\Enfant;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\ParcFestayre;
use App\ParcFamille;
use App\ParcEnfant;

class ParcoursController extends Controller
{
    public function parcours($n)
    {
        return view('parcours')->with('avatar', $n);
    }
    
    public function parcoursChoisi($n, $k)
    {
        if($k == 'Festayre'){
            $table = ParcFestayre::orderBy('ordre', 'ASC')->get();
            /*$table = DB::table('festayres')
                ->orderBy('ordre', 'asc')
                ->get();*/
        }
        
        elseif($k == 'Famille'){
            $table = ParcFamille::orderBy('ordre', 'ASC')->get();
        }
        elseif($k == 'Enfant'){
            $table = ParcEnfant::orderBy('ordre', 'ASC')->get();
        }
        
        return view('parcoursChoisi')
            ->with('avatar', $n)
            ->with('parcours', $k)
            ->with('table', $table);
    }
}
