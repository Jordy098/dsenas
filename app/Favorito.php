<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Favorito extends Model
{
    protected $table="favoritos";

    public function usuario()
    {
    	return $this->belongsTo('App\Usuario');
    } 
    public function video ()
    {
    	return $this->belongsTo('App\Video');
    }
}
