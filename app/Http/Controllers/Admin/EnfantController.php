<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

use App\Http\Requests;
use App\Enfant;
use App\Image;
use App\Coordonnee;
use App\ParcEnfant;

class EnfantController extends Controller
{
    public function index()
    {
        $data = ParcEnfant::orderBy('ordre', 'ASC')->get();
        return view('admin.enfant.index', array(
            'data' => $data
            ));
    }
    
    public function create(){
        return view('admin.enfant.create');
    }
    
    public function store(Request $request){
        $point = new ParcEnfant();
        $point->ordre = $request->input('ordre');
        $point->video = $request->input('video');
        $point->save();
        
        return redirect()->back();
    }
    public function show($id){
        $data = ParcEnfant::find($id);
        return view('admin.festayre.edit', array(
            'data' => $data
            ));
    }
    public function edit($id){
        $data = ParcEnfant::find($id);
        return view('admin.enfant.edit', array(
            'data' => $data
            ));
    }
    public function update(Request $request, $id){
        
        $point = ParcEnfant::find($id);
        $point->ordre = $request->input('ordre');
        $point->video = $request->input('video');
        $point->save();
        
        //Post::where('id', $id)->update($request->all());
        
        return redirect()->back();
    }
    
    public function destroy($id){
        $data = ParcEnfant::find($id);
        $data->delete();
        return redirect()->back();
    }
}
