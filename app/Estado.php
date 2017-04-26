<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
    protected $table='estados';
    protected $fillable=['descripcion'];
    
    public function videos ()
    {
    	return $this->hasMany('App\Video');
    }
}
