<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProfesorModel extends Model
{
    protected $table = 'profesor';
    protected $fillable = [
        'idProfesor', 'Nombre', 'APaterno', 'AMaterno',
    ];

    public function grupos()
    {
        //return $this->belongsToMany('App\GrupoModel');
        //return $this->belongsToMany('App\GrupoModel', 'profesor_grupo', 'Profesor_id', 'Grupo_id');
        return $this->hasManyThrough('App\GrupoModel', 'Profesor_id', 'Grupo_id');
    }

    public function evaluaciones()
    {
        return $this->hasMany('App\EvaluacionModel');
    }

    public function comments()
    {
        return $this->hasMany('App\CommentModel');
    }
}
