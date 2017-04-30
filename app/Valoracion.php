<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Valoracion extends Model
{
    protected $table="valoraciones";
    protected $fillable=['n_estrellas','usuario_id','video_id'];
    
    public function video()
    {
    	return $this->belongsTo('App\Video');
    }
    public function usuario()
    {
    	return $this->belongsTo('App\Usuario');
    }
}
