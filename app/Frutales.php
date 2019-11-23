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

    public function getResponses()//Obtener
    {
        return $this->hasMany(Response::class);
    }
}

