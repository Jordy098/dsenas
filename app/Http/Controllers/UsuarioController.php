<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;

class UsuarioController extends Controller
{
    public function index()
    {
        return view('Usuarios.index'); //index
    }
    public function index2()
    {
        return view('Usuarios.login'); //login
    }
    public function admin()
    {
        return view('Administrador.admin');
    }

    public function create()
    {
        return view('Usuarios.create');
    }

    public function store(Request $request)
    {
        $usuario=new Usuario($request->all());
        $usuario->clave=bcrypt($request->clave);
        $usuario->save();
        dd('Usuario Creado');
    }
    /*public function view($id)
    {
    	$favorito=Favorito::find($id);
    	$favorito->each(function($favorito){
    		$favorito->usuario;
    		$favorito->video;
    	});
    	dd($favorito);
    	$usuario=Usuario::find($id);
    	
    	$usuario->rol;
    	$usuario->valoraciones;
    	$usuario->favorito;

    	return view('Home.index',['usuario'=>$usuario]);
    }*/
}
