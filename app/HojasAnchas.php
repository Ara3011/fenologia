<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class HojasAnchas extends Model
{
    use SoftDeletes;

    protected $table='forestales_hojas_anchas';
    protected $fillable = [
        'descripcion',
    ];
    protected $primaryKey = 'id_forestalhojaancha';

    public function getResponses()//Obtener
    {
        return $this->hasMany(Response::class);
    }
}
