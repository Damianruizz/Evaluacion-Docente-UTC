<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CuatrimestreModel extends Model
{
    protected $table = 'cuatrimestre';
    protected $fillable = [
        'cutrimestre',
    ];

    public function grupos()
    {
        return $this->hasMany('App\GrupoModel');
    }
}
