<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cultivos extends Model
{
    use SoftDeletes;


    protected $fillable = [
        'descripcion',
    ];
    protected $primaryKey = 'id_cultivo';

    public function getResponses()//Obtener
    {
        return $this->hasMany(Response::class);
    }
}
