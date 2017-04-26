<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
     protected $table='videos';
     protected $fillable=['url'];

     public function region()
     {
     	return $this->belongsTo('App\Region');
     }
     public function palabra()
     {
     	return $this->belongsTo('App\Palabra');
     }
     public function estado()
     {
     	return $this->belongsTo('App\Estado');
     }
     public function valoraciones()
     {
        return $this->hasMany('App\Valoracion');
     }
     public function favorito()
     {
        return $this->hasMany('App\Favorito');
     }
}
