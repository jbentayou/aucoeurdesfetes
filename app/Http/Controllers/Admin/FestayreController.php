<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

use App\Http\Requests;
use App\Festayre;
use App\Image;
use App\ParcFestayre;
use App\Coordonnee;
use Illuminate\Support\Facades\DB;

class FestayreController extends Controller
{
    public function index()
    {
        $data = ParcFestayre::orderBy('ordre', 'ASC')->get();
        /*$data = DB::table('parc_festayres')
                ->orderBy('ordre', 'asc')
                ->get();*/
        return view('admin.festayre.index', array(
            'data' => $data
            ));
    }
    
    public function create(){
        return view('admin.festayre.create');
    }
    
    public function store(Request $request){
        /*$this->validate($request, [
            'ordre' => 'required|unique:festayres',
        ]);*/
        
        $point = new ParcFestayre();
        $point->ordre = $request->input('ordre');
        $point->video = $request->input('video');
        $point->save();
        
        return redirect()->back();
    }
    public function show($id){
        $data = ParcFestayre::find($id);
        return view('admin.festayre.edit', array(
            'data' => $data
            ));
    }
    public function edit($id){
        $data = ParcFestayre::find($id);
        return view('admin.festayre.edit', array(
            'data' => $data
            ));
    }
    public function update(Request $request, $id){
        
        $point = ParcFestayre::find($id);
        $point->ordre = $request->input('ordre');
        $point->video = $request->input('video');
        $point->save();
        
        return redirect()->back();
    }
    
    public function destroy($id){
        $data = ParcFestayre::find($id);
        $data->delete();
        return redirect()->back();
    }
}
