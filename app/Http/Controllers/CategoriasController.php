<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categoria;

class CategoriasController extends Controller
{
    public function index()
    {
        $categorias=Categoria::orderBy('id','ASC')->paginate(5);
        return view('Administrador.listacategoria')->with('categorias',$categorias);
    }
    public function create()
    {
        return view('Administrador.categoria');
    }
    public function store(Request $request)
    {
        $categorias=new Categoria($request->all());
        $categorias->save();
        dd('La Categoria fue creada');
    }
}
