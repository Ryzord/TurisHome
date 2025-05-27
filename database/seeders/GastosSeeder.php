<?php

namespace Database\Seeders;

use App\Models\Gasto;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GastosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $gastos = [
            ['apartamento_id' => 1, 'gasto_factura_sin_iva' => 100.00, 'concepto_gasto' => 'Limpieza general', 'fecha' => '2025-01-15', 'nif_proveedor' => 'A12345678', 'iva' => 21, 'pagado' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['apartamento_id' => 2, 'gasto_factura_sin_iva' => 250.00, 'concepto_gasto' => 'Reparación eléctrica', 'fecha' => '2025-02-10', 'nif_proveedor' => 'B87654321', 'iva' => 10, 'pagado' => 0, 'created_at' => now(), 'updated_at' => now()],
            ['apartamento_id' => 3, 'gasto_factura_sin_iva' => 90.00, 'concepto_gasto' => 'Fontanería', 'fecha' => '2025-03-05', 'nif_proveedor' => 'C23456789', 'iva' => 21, 'pagado' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['apartamento_id' => 4, 'gasto_factura_sin_iva' => 60.00, 'concepto_gasto' => 'Pintura', 'fecha' => '2025-03-20', 'nif_proveedor' => 'D34567890', 'iva' => 10, 'pagado' => 0, 'created_at' => now(), 'updated_at' => now()],
            ['apartamento_id' => 5, 'gasto_factura_sin_iva' => 120.00, 'concepto_gasto' => 'Mantenimiento ascensor', 'fecha' => '2025-04-01', 'nif_proveedor' => 'E45678901', 'iva' => 21, 'pagado' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['apartamento_id' => 1, 'gasto_factura_sin_iva' => 80.00, 'concepto_gasto' => 'Limpieza ventanas', 'fecha' => '2025-04-15', 'nif_proveedor' => 'F56789012', 'iva' => 10, 'pagado' => 0, 'created_at' => now(), 'updated_at' => now()],
            ['apartamento_id' => 2, 'gasto_factura_sin_iva' => 300.00, 'concepto_gasto' => 'Cambio caldera', 'fecha' => '2025-05-01', 'nif_proveedor' => 'G67890123', 'iva' => 21, 'pagado' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['apartamento_id' => 3, 'gasto_factura_sin_iva' => 45.00, 'concepto_gasto' => 'Jardinería', 'fecha' => '2025-05-10', 'nif_proveedor' => 'H78901234', 'iva' => 10, 'pagado' => 0, 'created_at' => now(), 'updated_at' => now()],
            ['apartamento_id' => 4, 'gasto_factura_sin_iva' => 110.00, 'concepto_gasto' => 'Revisión gas', 'fecha' => '2025-06-01', 'nif_proveedor' => 'I89012345', 'iva' => 21, 'pagado' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['apartamento_id' => 5, 'gasto_factura_sin_iva' => 75.00, 'concepto_gasto' => 'Servicio limpieza piscina', 'fecha' => '2025-06-15', 'nif_proveedor' => 'J90123456', 'iva' => 10, 'pagado' => 0, 'created_at' => now(), 'updated_at' => now()],

            ['apartamento_id' => 1, 'gasto_factura_sin_iva' => 130.00, 'concepto_gasto' => 'Reparación persianas', 'fecha' => '2025-07-01', 'nif_proveedor' => 'K01234567', 'iva' => 21, 'pagado' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['apartamento_id' => 2, 'gasto_factura_sin_iva' => 95.00, 'concepto_gasto' => 'Revisión aire acondicionado', 'fecha' => '2025-07-10', 'nif_proveedor' => 'L12345678', 'iva' => 10, 'pagado' => 0, 'created_at' => now(), 'updated_at' => now()],
            ['apartamento_id' => 3, 'gasto_factura_sin_iva' => 200.00, 'concepto_gasto' => 'Instalación calefacción', 'fecha' => '2025-08-01', 'nif_proveedor' => 'M23456789', 'iva' => 21, 'pagado' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['apartamento_id' => 4, 'gasto_factura_sin_iva' => 50.00, 'concepto_gasto' => 'Revisión extintores', 'fecha' => '2025-08-15', 'nif_proveedor' => 'N34567890', 'iva' => 10, 'pagado' => 0, 'created_at' => now(), 'updated_at' => now()],
            ['apartamento_id' => 5, 'gasto_factura_sin_iva' => 175.00, 'concepto_gasto' => 'Reparación puerta garaje', 'fecha' => '2025-09-01', 'nif_proveedor' => 'O45678901', 'iva' => 21, 'pagado' => 1, 'created_at' => now(), 'updated_at' => now()],

            ['apartamento_id' => 1, 'gasto_factura_sin_iva' => 85.00, 'concepto_gasto' => 'Limpieza alfombras', 'fecha' => '2025-09-10', 'nif_proveedor' => 'P56789012', 'iva' => 10, 'pagado' => 0, 'created_at' => now(), 'updated_at' => now()],
            ['apartamento_id' => 2, 'gasto_factura_sin_iva' => 220.00, 'concepto_gasto' => 'Reparación tejado', 'fecha' => '2025-10-01', 'nif_proveedor' => 'Q67890123', 'iva' => 21, 'pagado' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['apartamento_id' => 3, 'gasto_factura_sin_iva' => 65.00, 'concepto_gasto' => 'Mantenimiento caldera', 'fecha' => '2025-10-15', 'nif_proveedor' => 'R78901234', 'iva' => 10, 'pagado' => 0, 'created_at' => now(), 'updated_at' => now()],
            ['apartamento_id' => 4, 'gasto_factura_sin_iva' => 135.00, 'concepto_gasto' => 'Reparación tuberías', 'fecha' => '2025-11-01', 'nif_proveedor' => 'S89012345', 'iva' => 21, 'pagado' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['apartamento_id' => 5, 'gasto_factura_sin_iva' => 90.00, 'concepto_gasto' => 'Servicio limpieza garaje', 'fecha' => '2025-11-15', 'nif_proveedor' => 'T90123456', 'iva' => 10, 'pagado' => 0, 'created_at' => now(), 'updated_at' => now()],

            ['apartamento_id' => 1, 'gasto_factura_sin_iva' => 145.00, 'concepto_gasto' => 'Cambio cerraduras', 'fecha' => '2025-12-01', 'nif_proveedor' => 'U01234567', 'iva' => 21, 'pagado' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['apartamento_id' => 2, 'gasto_factura_sin_iva' => 55.00, 'concepto_gasto' => 'Revisión iluminación', 'fecha' => '2025-12-10', 'nif_proveedor' => 'V12345678', 'iva' => 10, 'pagado' => 0, 'created_at' => now(), 'updated_at' => now()],
            ['apartamento_id' => 3, 'gasto_factura_sin_iva' => 300.00, 'concepto_gasto' => 'Instalación sistema alarma', 'fecha' => '2025-12-15', 'nif_proveedor' => 'W23456789', 'iva' => 21, 'pagado' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['apartamento_id' => 4, 'gasto_factura_sin_iva' => 70.00, 'concepto_gasto' => 'Limpieza canalones', 'fecha' => '2025-12-20', 'nif_proveedor' => 'X34567890', 'iva' => 10, 'pagado' => 0, 'created_at' => now(), 'updated_at' => now()],
            ['apartamento_id' => 5, 'gasto_factura_sin_iva' => 180.00, 'concepto_gasto' => 'Mantenimiento piscina', 'fecha' => '2025-12-25', 'nif_proveedor' => 'Y45678901', 'iva' => 21, 'pagado' => 1, 'created_at' => now(), 'updated_at' => now()],
        ];

        foreach ($gastos as $gasto) {
            $gasto = new Gasto($gasto);
             if ($gasto->iva) {
                $gasto->total_iva = $gasto->gasto_factura_sin_iva * ($gasto->iva / 100);
                $gasto->total_gasto = $gasto->gasto_factura_sin_iva + $gasto->total_iva;
            } else {
                $gasto->total_iva = 0;
                $gasto->total_gasto = $gasto->gasto_factura_sin_iva;
            }
            $gasto->save();
        }
    }
}
