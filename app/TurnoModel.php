<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TurnoModel extends Model
{
    protected $table = 'Turno';
    protected $fillable = [
        'turno',
    ];

    public function grupos()
    {
        return $this->hasMany('App\GrupoModel');
    }
}
