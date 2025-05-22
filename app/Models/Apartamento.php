<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Apartamento extends Model
{
    //esto lo ponemos para que podamos manipular varios datos a la vez para la base de datos, si no salta error
    protected $fillable = [
        'direccion',
        'ciudad',
        'pais',
        'codigo_postal',
        'precio_venta'
    ];

    public function gastos()
    {
        return $this->hasMany(Gasto::class);
    }

    public function ingreso()
    {
        return $this->hasMany(Ingreso::class);
    }
}
