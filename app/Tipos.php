<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tipos extends Model
{
    use SoftDeletes;


    protected $fillable = [
        'descripcion',
    ];
    protected $primaryKey = 'id_tipo';

    public function getResponses()//Obtener
    {
        return $this->hasMany(Response::class);
    }
}
