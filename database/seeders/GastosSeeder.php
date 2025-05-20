<?php

namespace Database\Seeders;

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
        DB::table('gastos')->insert([
            ['apartamento_id' => 1, 'gasto_factura_sin_iva' => 100.00, 'concepto_gasto' => 'Limpieza general', 'fecha' => '2024-01-15', 'nif_proveedor' => 'A12345678', 'iva' => 21, 'pagado' => 1, 'total_iva' => 21.00, 'total_gasto' => 121.00, 'created_at' => now(), 'updated_at' => now()],
            ['apartamento_id' => 2, 'gasto_factura_sin_iva' => 250.00, 'concepto_gasto' => 'Reparación eléctrica', 'fecha' => '2024-02-10', 'nif_proveedor' => 'B87654321', 'iva' => 10, 'pagado' => 0, 'total_iva' => 25.00, 'total_gasto' => 275.00, 'created_at' => now(), 'updated_at' => now()],
            ['apartamento_id' => 3, 'gasto_factura_sin_iva' => 90.00, 'concepto_gasto' => 'Fontanería', 'fecha' => '2024-03-05', 'nif_proveedor' => 'C23456789', 'iva' => 21, 'pagado' => 1, 'total_iva' => 18.90, 'total_gasto' => 108.90, 'created_at' => now(), 'updated_at' => now()],
            ['apartamento_id' => 4, 'gasto_factura_sin_iva' => 60.00, 'concepto_gasto' => 'Pintura', 'fecha' => '2024-03-20', 'nif_proveedor' => 'D34567890', 'iva' => 10, 'pagado' => 0, 'total_iva' => 6.00, 'total_gasto' => 66.00, 'created_at' => now(), 'updated_at' => now()],
            ['apartamento_id' => 5, 'gasto_factura_sin_iva' => 120.00, 'concepto_gasto' => 'Mantenimiento ascensor', 'fecha' => '2024-04-01', 'nif_proveedor' => 'E45678901', 'iva' => 21, 'pagado' => 1, 'total_iva' => 25.20, 'total_gasto' => 145.20, 'created_at' => now(), 'updated_at' => now()],
            ['apartamento_id' => 1, 'gasto_factura_sin_iva' => 80.00, 'concepto_gasto' => 'Limpieza ventanas', 'fecha' => '2024-04-15', 'nif_proveedor' => 'F56789012', 'iva' => 10, 'pagado' => 0, 'total_iva' => 8.00, 'total_gasto' => 88.00, 'created_at' => now(), 'updated_at' => now()],
            ['apartamento_id' => 2, 'gasto_factura_sin_iva' => 300.00, 'concepto_gasto' => 'Cambio caldera', 'fecha' => '2024-05-01', 'nif_proveedor' => 'G67890123', 'iva' => 21, 'pagado' => 1, 'total_iva' => 63.00, 'total_gasto' => 363.00, 'created_at' => now(), 'updated_at' => now()],
            ['apartamento_id' => 3, 'gasto_factura_sin_iva' => 45.00, 'concepto_gasto' => 'Jardinería', 'fecha' => '2024-05-10', 'nif_proveedor' => 'H78901234', 'iva' => 10, 'pagado' => 0, 'total_iva' => 4.50, 'total_gasto' => 49.50, 'created_at' => now(), 'updated_at' => now()],
            ['apartamento_id' => 4, 'gasto_factura_sin_iva' => 110.00, 'concepto_gasto' => 'Revisión gas', 'fecha' => '2024-06-01', 'nif_proveedor' => 'I89012345', 'iva' => 21, 'pagado' => 1, 'total_iva' => 23.10, 'total_gasto' => 133.10, 'created_at' => now(), 'updated_at' => now()],
            ['apartamento_id' => 5, 'gasto_factura_sin_iva' => 75.00, 'concepto_gasto' => 'Sustitución cerradura', 'fecha' => '2024-06-15', 'nif_proveedor' => 'J90123456', 'iva' => 10, 'pagado' => 0, 'total_iva' => 7.50, 'total_gasto' => 82.50, 'created_at' => now(), 'updated_at' => now()],
            ['apartamento_id' => 1, 'gasto_factura_sin_iva' => 90.00, 'concepto_gasto' => 'Reparación tejado', 'fecha' => '2024-07-01', 'nif_proveedor' => 'K01234567', 'iva' => 21, 'pagado' => 1, 'total_iva' => 18.90, 'total_gasto' => 108.90, 'created_at' => now(), 'updated_at' => now()],
            ['apartamento_id' => 2, 'gasto_factura_sin_iva' => 55.00, 'concepto_gasto' => 'Fumigación', 'fecha' => '2024-07-10', 'nif_proveedor' => 'L12345678', 'iva' => 10, 'pagado' => 0, 'total_iva' => 5.50, 'total_gasto' => 60.50, 'created_at' => now(), 'updated_at' => now()],
            ['apartamento_id' => 3, 'gasto_factura_sin_iva' => 130.00, 'concepto_gasto' => 'Cambio grifería', 'fecha' => '2024-08-01', 'nif_proveedor' => 'M23456789', 'iva' => 21, 'pagado' => 1, 'total_iva' => 27.30, 'total_gasto' => 157.30, 'created_at' => now(), 'updated_at' => now()],
            ['apartamento_id' => 4, 'gasto_factura_sin_iva' => 200.00, 'concepto_gasto' => 'Instalación aire acondicionado', 'fecha' => '2024-08-15', 'nif_proveedor' => 'N34567890', 'iva' => 21, 'pagado' => 0, 'total_iva' => 42.00, 'total_gasto' => 242.00, 'created_at' => now(), 'updated_at' => now()],
            ['apartamento_id' => 5, 'gasto_factura_sin_iva' => 85.00, 'concepto_gasto' => 'Instalación de luces LED', 'fecha' => '2024-09-01', 'nif_proveedor' => 'O45678901', 'iva' => 10, 'pagado' => 1, 'total_iva' => 8.50, 'total_gasto' => 93.50, 'created_at' => now(), 'updated_at' => now()],
            ['apartamento_id' => 1, 'gasto_factura_sin_iva' => 300.00, 'concepto_gasto' => 'Cambio parquet', 'fecha' => '2024-09-15', 'nif_proveedor' => 'P56789012', 'iva' => 21, 'pagado' => 0, 'total_iva' => 63.00, 'total_gasto' => 363.00, 'created_at' => now(), 'updated_at' => now()],
            ['apartamento_id' => 2, 'gasto_factura_sin_iva' => 180.00, 'concepto_gasto' => 'Cortinas nuevas', 'fecha' => '2024-10-01', 'nif_proveedor' => 'Q67890123', 'iva' => 10, 'pagado' => 1, 'total_iva' => 18.00, 'total_gasto' => 198.00, 'created_at' => now(), 'updated_at' => now()],
            ['apartamento_id' => 3, 'gasto_factura_sin_iva' => 70.00, 'concepto_gasto' => 'Decoración interior', 'fecha' => '2024-10-10', 'nif_proveedor' => 'R78901234', 'iva' => 21, 'pagado' => 0, 'total_iva' => 14.70, 'total_gasto' => 84.70, 'created_at' => now(), 'updated_at' => now()],
            ['apartamento_id' => 4, 'gasto_factura_sin_iva' => 95.00, 'concepto_gasto' => 'Seguro hogar', 'fecha' => '2024-11-01', 'nif_proveedor' => 'S89012345', 'iva' => 0, 'pagado' => 1, 'total_iva' => 0.00, 'total_gasto' => 95.00, 'created_at' => now(), 'updated_at' => now()],
            ['apartamento_id' => 5, 'gasto_factura_sin_iva' => 60.00, 'concepto_gasto' => 'Revisión extintores', 'fecha' => '2024-11-15', 'nif_proveedor' => 'T90123456', 'iva' => 10, 'pagado' => 0, 'total_iva' => 6.00, 'total_gasto' => 66.00, 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
