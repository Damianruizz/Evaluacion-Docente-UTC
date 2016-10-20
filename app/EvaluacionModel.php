<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EvaluacionModel extends Model
{
    protected $table = 'evaluacion';
    protected $fillable = [
        'evaluacion', 'Profesor_id', 'modulo1', 'modulo2', 'modulo3', 'modulo4', 'modulo5', 'modulo6', 'modulo7', 'carrera',
    ];

    public function profesor()
    {
        return $this->belongsTo('App\ProfesorModel');
    }

}
