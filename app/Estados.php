<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Estados extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'descripcion',
    ];
    protected $primaryKey = 'id_estado';

    public function getResponses()//Obtener
    {
        return $this->hasMany(Response::class);
    }
}
