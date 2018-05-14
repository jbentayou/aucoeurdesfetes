<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

use App\Http\Requests;
//use App\Map;
use App\Point;

class ParcoursAController extends Controller
{
    public function index()
    {
        $data = Parcours::all();
        return view('admin.parcours.index', array(
            'data' => $data
            ));
    }
    
    public function create(){
        return view('admin.parcours.create');
    }
    
    public function store(Request $request){
        $Parcours = new Parcours();
        $Parcours->parcours = $request->input('parcours');
        $Parcours->point_id = $request->input('point_id');
    
        $Parcours->save();
        
        return redirect()->back();
    }
    public function show($id){
        $data = Parcours::find($id);
        return view('admin.parcours.edit', array(
            'data' => $data
            ));
    }
    public function edit($id){
        $data = Parcours::find($id);
        return view('admin.parcours.edit', array(
            'data' => $data
            ));
    }
    
    public function destroy($id){
        $data = Parcours::find($id);
        Storage::delete($data->image['src']);
        $data->delete();
        return redirect()->back();
    }
}