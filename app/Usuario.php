<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    //
    protected $fillable=['nick','nombre','correo','clave','fecha_de_nacimiento'];

    public function rol()
    {
    	return $this->belongsTo('App\Rol');
    }
    public function valoraciones()
    {
    	return $this->hasMany('App\Valoracion');
    }
    public function favorito()
    {
        return $this->hasMany('App\favorito');
    }
}
