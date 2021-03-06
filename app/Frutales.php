<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Frutales extends Model
{
    use SoftDeletes;


    protected $fillable = [
         'descripcion',
    ];
    protected $primaryKey = 'id_frutal';

    public function getResponses()//Obtener
    {
        return $this->hasMany(Response::class);
    }
}

