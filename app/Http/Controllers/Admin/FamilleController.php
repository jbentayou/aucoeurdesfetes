<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

use App\Http\Requests;
use App\Famille;
use App\Image;
use App\ParcFamille;
use App\Coordonnee;

class FamilleController extends Controller
{
    public function index()
    {
        $data = ParcFamille::orderBy('ordre', 'ASC')->get();
        return view('admin.famille.index', array(
            'data' => $data
            ));
    }
    
    public function create(){
        return view('admin.famille.create');
    }
    
    public function store(Request $request){
        
        $point = new ParcFamille();
        $point->ordre = $request->input('ordre');
        $point->video = $request->input('video');
        $point->save();
        
        return redirect()->back();
    }
    public function show($id){
        $data = ParcFamille::find($id);
        return view('admin.famille.edit', array(
            'data' => $data
            ));
    }
    public function edit($id){
        $data = ParcFamille::find($id);
        return view('admin.famille.edit', array(
            'data' => $data
            ));
    }
    public function update(Request $request, $id){
        
        $point = ParcFamille::find($id);
        $point->ordre = $request->input('ordre');
        $point->video = $request->input('video');
        $point->save();
        
        //Post::where('id', $id)->update($request->all());
        
        return redirect()->back();
    }
    
    public function destroy($id){
        $data = ParcFamille::find($id);
        $data->delete();
        return redirect()->back();
    }
}
