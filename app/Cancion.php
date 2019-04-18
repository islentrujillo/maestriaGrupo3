<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cancion extends Model
{
    protected $fillable = [
        'nombre',
        'interprete',
        'duracion'
    ];

    public function lista()
        {
            return $this->belongsTo('App\Lista');
        }

    public function genero()
        {
            return $this->belongsTo('App\Genero');
        }
}
