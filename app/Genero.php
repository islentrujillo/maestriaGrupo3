<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genero extends Model
{
    protected $fillable = [
        'nombre'
    ];

    public function canciones()
    {
        return $this->hasMany('App\Cancion');
    }
}
