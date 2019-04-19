<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
    protected $fillable = [
        'nombre'
    ];

    public function listas()
    {
        return $this->hasMany('App\Lista');
    }
}
