<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Semanales extends Model
{
    use SoftDeletes;

    protected $table='registros_semanales';
    protected $fillable = [
        'nombre', 'correo', 'rancheria','nombre_comunidad', 'municipio','id_estado', 'fecha','nombre_especie', 'id_fasefeno','id_observacionc',
    ];

    public function getResponses()//Obtener
    {
        return $this->hasMany(Response::class);
    }
}
