<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Coniferas extends Model
{
    use SoftDeletes;

protected $table='forestales_coniferas';
    protected $fillable = [
        'descripcion',
    ];
    protected $primaryKey = 'id_forestalconif';

    public function getResponses()//Obtener
    {
        return $this->hasMany(Response::class);
    }
}
