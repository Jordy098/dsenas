<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Video;
use App\Palabra;
use App\Region;
use App\Estado;
use Laracasts\Flash\Flash;

class VideoController extends Controller
{
    public function index()
    {
        $videos=Video::orderBy('id','ASC')->paginate(5);
        $palabras=Palabra::all();
        $regiones=Region::all();
        $estados=Estado::all();
        return view('Administrador/Videos/listavideo',compact('palabras','regiones','estados','videos'));
    }
    public function create()
    {
        $palabras=Palabra::all();
        $regiones=Region::all();
        $estados=Estado::all();
        return view('Administrador/Videos/video',compact('palabras','regiones','estados'));
    }
    public function store(Request $request)
    {
        $videos=new Video($request->all());
        $videos->save();
        flash('El video fue agregado')->success();
        return redirect()->route('videos.index');
    }
     public function edit($id)
    {
        $videos=Video::find($id);
        $palabras=Palabra::all();
        $regiones=Region::all();
        $estados=Estado::all();
        return view('Administrador.Videos.edit',compact('palabras','regiones','estados','videos'));
    }
     public function update(Request $request, $id)
    {
        $video=Video::find($id);
        $video->fill($request->all());
        //$categoria->nombre=$request->nombre;
        $video->save();
        flash('El video fue editado')->warning();
        return redirect()->route('videos.index');
    }
    public function destroy($id)
    {
        $video=Video::find($id);
        $video->delete();
        Flash::error("El video fue eliminado");
        return redirect()->route('videos.index');
    }
}
