<?php

namespace App\Models;

use App\Http\Controllers\IngresosController;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Ingreso extends Model
{
    protected $fillable = [
        'apartamento_id',
        'intermediario_id',
        'tarifa_id',
        'fecha_entrada',
        'fecha_salida',
        'numero_personas',
        'descuento',
        'nombre_cliente',
        'nif_cliente',
        'telefono_cliente',
        'observaciones',
        'numero_noches',
        'total_iva',
        'total_factura'
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

    // Se ha intentado hacer de esta manera, pero mucho lio. Se mete en el IngresosController y au
    // public function calcularNoches()
    // {
    //     $fecha_entrada = Carbon::parse($this->input('fecha_entrada'));
    //     $fecha_salida = Carbon::parse($this->input('fecha_salida'));

    //     $nochesCalculado = $fecha_entrada->diffInDays($fecha_salida);

    //     return $nochesCalculado;
    // }

    // public function calcularFactura() {}
}
