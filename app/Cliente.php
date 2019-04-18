<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $fillable = [
        'nombres',
        'email'
    ];

    public function listas()
        {
            return $this->hasMany('App\Lista');
        }
}
