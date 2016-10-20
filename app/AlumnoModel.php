<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AlumnoModel extends Model
{
    protected $table = 'alumno';
    protected $fillable = [
        'Nombre', 'APaterno', 'AMaterno', 'correo', 'Contrasena', 'company_id',
    ];

    public function grupo()
    {
        return $this->belongsTo('App\GrupoModel');
    }
}
