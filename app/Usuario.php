<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;


class Usuario extends Model
{

    //
    protected $fillable=['nick','nombre','correo','clave','fecha_de_nacimiento','rol_id'];

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
