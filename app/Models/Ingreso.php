<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ingreso extends Model
{
    protected $fillable = [
        'intermediario_id',
        'apartamento_id',
        'fecha_entrada',
        'fecha_salida',
        'nombre_cliente',
        'telefono_cliente',
        'numero_personas',
        'tarifa_aplicada',
        'descuento',
        'observaciones'

    ];

    protected $casts = [
        'check_in' => 'date',
        'check_out' => 'date',
        'total_iva' => 'float',
        'total_invoice' => 'float',
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
