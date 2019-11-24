<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class EventosExtremos extends Model
{
    use SoftDeletes;

    protected $table='eventos_extremos';
    protected $fillable = [
        'descripcion',
    ];
    protected $primaryKey = 'id_evento_extremo';

    public function getResponses()//Obtener
    {
        return $this->hasMany(Response::class);
    }
}
