<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Palabra extends Model
{
    protected $table='palabras';
    protected $fillable=['nombre','categoria_id'];

    public function categoria ()
    {
    	return $this->belongsTo('App\Categoria');
    }
    public function videos ()
    {
    	return $this->hasMany('App\Video');
    }
}
