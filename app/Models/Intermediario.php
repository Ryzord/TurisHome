<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Intermediario extends Model
{
    protected $fillable = [
    'nombre',
    'apellidos',
    'correo_electronico',
    'telefono',
    'comision'
];

    public function ingreso(){
        return $this->hasMany(Ingreso::class);
    }
}
