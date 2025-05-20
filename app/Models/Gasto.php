<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gasto extends Model
{
    protected $fillable = [
    'apartamento_id',
    'gasto_factura_sin_iva',
    'concepto_gasto',
    'fecha',
    'nif_proveedor',
    'iva',
    'pagado'
];

    public function apartamento (){
        return $this->belongsTo(Apartamento::class);
    }

    public function calcularTotal(){
        if ($this->iva) {
            $this->total_iva = $this->gasto_factura_sin_iva * ($this->iva / 100);
            $this->total_gasto = $this->gasto_factura_sin_iva + $this->total_iva;
        } else {
            $this->total_iva = 0;
            $this->total_gasto = $this->gasto_factura_sin_iva;
        }
    }
}
