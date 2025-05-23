<?php

namespace App\Models;

use App\Http\Controllers\IngresosController;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Ingreso extends Model
{
    protected $fillable = [
        'intermediario_id',
        'apartamento_id',
        'fecha_entrada',
        'fecha_salida',
        'nombre_cliente',
        'telefono_cliente',
        'nif_cliente',
        'numero_personas',
        'tarifa_aplicada',
        'descuento',
        'observaciones'

    ];

    public function apartamento()
    {
        return $this->belongsTo(Apartamento::class);
    }

    public function intermediario()
    {
        return $this->belongsTo(Intermediario::class);
    }

    public function tarifa()
    {
        return $this->belongsTo(Tarifa::class);
    }
}
