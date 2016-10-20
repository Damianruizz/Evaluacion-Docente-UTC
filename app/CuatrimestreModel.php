<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CuatrimestreModel extends Model
{
    protected $table = 'Cutrimestre';
    protected $fillable = [
        'idCutrimestre' ,'cutrimestre',
    ];

    public function grupos()
    {
        return $this->hasMany('App\GrupoModel');
    }
}
