<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

use App\Http\Requests;
//use App\Map;
use App\Image;
use App\Point;
use App\Contenu;

class MapAController extends Controller
{
    public function index()
    {
        $data = Contenu::all();
        return view('admin.map.index', array(
            'data' => $data
            ));
    }
    
    public function create(){
        return view('admin.map.create');
    }
    
    public function store(Request $request){
        $point = new Contenu();
        $point->titre = $request->input('titre');
        $point->video = $request->input('video');
        $point->miniature = $request->input('miniature');
        $point->longitude = $request->input('longitude');
        $point->latitude = $request->input('latitude');
        
        if($request->file('imgPicto') != null){
            //$img = new Image();
            //$n = $request->file('monument')->getClientOriginalname();
            //$path = Storage::disk('images')->put('test.jpg', $request->file('imageF'), 'public');
            $destination = 'images/'; // your upload folder
            $image       = $request->file('imgPicto');
            $filename    = $image->getClientOriginalName(); // get the filename
            $image->move($destination, $filename); // move file to destination
            //$img->src = $filename;
            //$img->save();
            $point->imgPicto = $filename;
        }
         
         if($request->file('imgSurvol') != null){
            //$img = new Image();
            //$n = $request->file('imgSurvol')->getClientOriginalname();
            //$path = Storage::disk('images')->put('test.jpg', $request->file('imageF'), 'public');
            $destination = 'images/Parcours/'; // your upload folder
            $image     = $request->file('imgSurvol');
            $filename    = $image->getClientOriginalName(); // get the filename
            $image->move($destination, $filename); // move file to destination
            //$img->src = $filename;
            //$img->save();
            $point->imgSurvol = $filename;
        }
        $point->save();
        
        return redirect()->back();
    }
    public function show($id){
        $data = Contenu::find($id);
        return view('admin.map.edit', array(
            'data' => $data
            ));
    }
    public function edit($id){
        $data = Contenu::find($id);
        return view('admin.map.edit', array(
            'data' => $data
            ));
    }
    public function update(Request $request, $id){
        
        $point = Contenu::find($id);
        $point->titre = $request->input('titre');
        $point->video = $request->input('video');
        $point->miniature = $request->input('miniature');
        $point->longitude = $request->input('longitude');
        $point->latitude = $request->input('latitude');
        
        if($request->file('imgPicto') != null){
            $destination = 'images/'; // your upload folder
            $image       = $request->file('imgPicto');
            $filename    = $image->getClientOriginalName(); // get the filename
            $image->move($destination, $filename); // move file to destination
            $point->imgPicto = $filename;
        }
         
         if($request->file('imgSurvol') != null){
            $destination = 'images/Parcours/'; // your upload folder
            $image     = $request->file('imgSurvol');
            $filename    = $image->getClientOriginalName(); // get the filename
            $image->move($destination, $filename); // move file to destination
            $point->imgSurvol = $filename;
        }
        $point->save();
        
        return redirect()->back();
    }
    
    public function destroy($id){
        $data = Contenu::find($id);
        $data->delete();
        return redirect()->back();
    }
}
