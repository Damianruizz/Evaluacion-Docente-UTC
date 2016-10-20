<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GrupoModel extends Model
{
    protected $table = 'grupo';
    protected $fillable = [
        'idGrupo', 'idTruno', 'idCarrera', 'idCuatrimestre', 'grupo',
    ];


    public function profesores()
    {
        //return $this->belongsToMany('App\GrupoModel');
        return $this->hasManyThrough('App\ProfesorModel', 'App\Profesor_Grupo', 'Profesor_id', 'Grupo_id');
        //return $this->belongsToMany('App\ProfesorModel', 'Profesor_Grupo', 'Profesor_id', 'Grupo_id' );
    }
}
