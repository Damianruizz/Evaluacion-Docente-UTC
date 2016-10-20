<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profesor_Grupo extends Model
{
    protected $table = 'profesor_grupo';

    protected $fillable = [
        'Profesor_id', 'Grupo_id',
    ];
}
