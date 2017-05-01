<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categoria;
use Laracasts\Flash\Flash;

class CategoriasController extends Controller
{
    public function index()
    {
        $categorias=Categoria::orderBy('id','ASC')->paginate(5);
        return view('Administrador.Categorias.listacategoria')->with('categorias',$categorias); 
    }
    public function create()
    {
        return view('Administrador.Categorias.categoria');
    }
    public function store(Request $request)
    {
        $categorias=new Categoria($request->all());
        $categorias->save();
        flash('La categoria "'.$categorias->nombre.'" fue agregada')->success();
        return redirect()->route('categorias.index');
    }
     public function edit($id)
    {
        $categorias=Categoria::find($id);
        return view('Administrador.Categorias.edit')->with('categorias',$categorias);
    }
     public function update(Request $request, $id)
    {
        $categoria=Categoria::find($id);
        $categoria->fill($request->all());
        //$categoria->nombre=$request->nombre;
        $categoria->save();
        flash('La categoria "'.$categoria->nombre.'" fue editada')->warning();
        return redirect()->route('categorias.index');
    }
    public function destroy($id)
    {
        $categoria=Categoria::find($id);
        $categoria->delete();
        Flash::error("La Categoria fue eliminada");
        return redirect()->route('categorias.index');
    }
}
