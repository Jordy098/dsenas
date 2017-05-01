<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Palabra;
use App\Categoria;
use Laracasts\Flash\Flash;

class PalabraController extends Controller
{
    public function index(){
    	$palabras=Palabra::orderBy('id','ASC')->paginate(5);
    	$categorias=Categoria::all();
        return view('Administrador/Palabras/listapalabra',compact('palabras','categorias'));
    }
    public function create(){
    	$categorias=Categoria::all();
        return view('Administrador/Palabras/palabra')->with('categorias',$categorias);
    }
    public function store(Request $request)
    {
        $palabras=new Palabra($request->all());
        $palabras->save();
        flash('La palabra "'.$palabras->nombre.'" fue agregada')->success();
        return redirect()->route('palabras.index');
    }
     public function edit($id)
    {
        $palabras=Palabra::find($id);
        $categorias=Categoria::all();
        return view('Administrador.Palabras.edit',compact('palabras','categorias'));
    }
     public function update(Request $request, $id)
    {
        $palabra=Palabra::find($id);
        $palabra->fill($request->all());
        //$categoria->nombre=$request->nombre;
        $palabra->save();
        flash('La palabra "'.$palabra->nombre.'" fue editada')->warning();
        return redirect()->route('palabras.index');
    }
    public function destroy($id)
    {
    	$palabras=Palabra::find($id);
    	$palabras->delete();
    	Flash::error("La palabra fue eliminada");
    	return redirect()->route('palabras.index');
    }
}
