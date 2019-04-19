<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lista extends Model
{
    protected $fillable = [
        'nombre',
        'estado'
    ];

    public function cliente()
    {
        return $this->belongsTo('App\Cliente');
    }

    public function estado()
    {
        return $this->belongsTo('App\Estado');
    }

    public function canciones()
    {
        return $this->hasMany('App\Cancion');
    }
}
