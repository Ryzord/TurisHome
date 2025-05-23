<?php

namespace Database\Seeders;

use App\Models\Ingreso;
use App\Models\Intermediario;
use App\Models\Apartamento;
use App\Models\Tarifa;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class IngresosSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('ingresos')->insert([
            ['intermediario_id' => 1, 'apartamento_id' => 1, 'tarifa_id' => 5, 'fecha_entrada' => '2024-01-10', 'fecha_salida' => '2024-01-15', 'nombre_cliente' => 'Juan Pérez', 'telefono_cliente' => '600123456', 'nif_cliente' => '12345678A', 'numero_personas' => 2, 'descuento' => 0.00, 'observaciones' => 'Cliente frecuente', 'created_at' => now(), 'updated_at' => now()],
            ['intermediario_id' => 2, 'apartamento_id' => 2, 'tarifa_id' => 8, 'fecha_entrada' => '2024-02-05', 'fecha_salida' => '2024-02-12', 'nombre_cliente' => 'María Gómez', 'telefono_cliente' => '600987654', 'nif_cliente' => '87654321B', 'numero_personas' => 4, 'descuento' => 10.00, 'observaciones' => '', 'created_at' => now(), 'updated_at' => now()],
            ['intermediario_id' => 1, 'apartamento_id' => 3, 'tarifa_id' => 4, 'fecha_entrada' => '2024-03-20', 'fecha_salida' => '2024-03-25', 'nombre_cliente' => 'Luis Martínez', 'telefono_cliente' => '601234567', 'nif_cliente' => '11223344C', 'numero_personas' => 3, 'descuento' => 5.00, 'observaciones' => 'Primera visita', 'created_at' => now(), 'updated_at' => now()],
            ['intermediario_id' => 3, 'apartamento_id' => 4, 'tarifa_id' => 3, 'fecha_entrada' => '2024-04-10', 'fecha_salida' => '2024-04-14', 'nombre_cliente' => 'Ana Ruiz', 'telefono_cliente' => '609876543', 'nif_cliente' => '55667788D', 'numero_personas' => 1, 'descuento' => 0.00, 'observaciones' => 'Estancia corta', 'created_at' => now(), 'updated_at' => now()],
            ['intermediario_id' => 2, 'apartamento_id' => 5, 'tarifa_id' => 6, 'fecha_entrada' => '2024-05-01', 'fecha_salida' => '2024-05-07', 'nombre_cliente' => 'Carlos Núñez', 'telefono_cliente' => '612345678', 'nif_cliente' => '99887766E', 'numero_personas' => 2, 'descuento' => 15.00, 'observaciones' => 'Reserva anticipada', 'created_at' => now(), 'updated_at' => now()],
            ['intermediario_id' => 1, 'apartamento_id' => 1, 'tarifa_id' => 10, 'fecha_entrada' => '2024-06-10', 'fecha_salida' => '2024-06-15', 'nombre_cliente' => 'Lucía Fernández', 'telefono_cliente' => '600111222', 'nif_cliente' => '22334455F', 'numero_personas' => 2, 'descuento' => 0.00, 'observaciones' => '', 'created_at' => now(), 'updated_at' => now()],
            ['intermediario_id' => 2, 'apartamento_id' => 2, 'tarifa_id' => 7, 'fecha_entrada' => '2024-06-20', 'fecha_salida' => '2024-06-25', 'nombre_cliente' => 'Pedro Sánchez', 'telefono_cliente' => '603456789', 'nif_cliente' => '33445566G', 'numero_personas' => 5, 'descuento' => 20.00, 'observaciones' => 'Grupo familiar', 'created_at' => now(), 'updated_at' => now()],
            ['intermediario_id' => 3, 'apartamento_id' => 3, 'tarifa_id' => 9, 'fecha_entrada' => '2024-07-01', 'fecha_salida' => '2024-07-10', 'nombre_cliente' => 'Beatriz López', 'telefono_cliente' => '602345678', 'nif_cliente' => '44556677H', 'numero_personas' => 3, 'descuento' => 0.00, 'observaciones' => '', 'created_at' => now(), 'updated_at' => now()],
            ['intermediario_id' => 1, 'apartamento_id' => 4, 'tarifa_id' => 11, 'fecha_entrada' => '2024-07-15', 'fecha_salida' => '2024-07-20', 'nombre_cliente' => 'Raúl Torres', 'telefono_cliente' => '604567890', 'nif_cliente' => '55667788I', 'numero_personas' => 1, 'descuento' => 0.00, 'observaciones' => 'Negocios', 'created_at' => now(), 'updated_at' => now()],
            ['intermediario_id' => 2, 'apartamento_id' => 5, 'tarifa_id' => 12, 'fecha_entrada' => '2024-08-01', 'fecha_salida' => '2024-08-05', 'nombre_cliente' => 'Isabel Moreno', 'telefono_cliente' => '605678901', 'nif_cliente' => '66778899J', 'numero_personas' => 2, 'descuento' => 5.00, 'observaciones' => '', 'created_at' => now(), 'updated_at' => now()],
            ['intermediario_id' => 1, 'apartamento_id' => 1, 'tarifa_id' => 13, 'fecha_entrada' => '2024-08-10', 'fecha_salida' => '2024-08-20', 'nombre_cliente' => 'Sofía Castro', 'telefono_cliente' => '606789012', 'nif_cliente' => '77889900K', 'numero_personas' => 4, 'descuento' => 10.00, 'observaciones' => 'Vacaciones verano', 'created_at' => now(), 'updated_at' => now()],
            ['intermediario_id' => 3, 'apartamento_id' => 2, 'tarifa_id' => 14, 'fecha_entrada' => '2024-09-01', 'fecha_salida' => '2024-09-07', 'nombre_cliente' => 'Daniel Romero', 'telefono_cliente' => '607890123', 'nif_cliente' => '88990011L', 'numero_personas' => 2, 'descuento' => 0.00, 'observaciones' => '', 'created_at' => now(), 'updated_at' => now()],
            ['intermediario_id' => 2, 'apartamento_id' => 3, 'tarifa_id' => 15, 'fecha_entrada' => '2024-09-10', 'fecha_salida' => '2024-09-15', 'nombre_cliente' => 'Miguel Navarro', 'telefono_cliente' => '608901234', 'nif_cliente' => '99001122M', 'numero_personas' => 3, 'descuento' => 10.00, 'observaciones' => '', 'created_at' => now(), 'updated_at' => now()],
            ['intermediario_id' => 3, 'apartamento_id' => 4, 'tarifa_id' => 16, 'fecha_entrada' => '2024-10-01', 'fecha_salida' => '2024-10-06', 'nombre_cliente' => 'Alba Serrano', 'telefono_cliente' => '609012345', 'nif_cliente' => '10111213N', 'numero_personas' => 2, 'descuento' => 0.00, 'observaciones' => 'Recomendación', 'created_at' => now(), 'updated_at' => now()],
            ['intermediario_id' => 1, 'apartamento_id' => 5, 'tarifa_id' => 17, 'fecha_entrada' => '2024-10-15', 'fecha_salida' => '2024-10-20', 'nombre_cliente' => 'Manuel Díaz', 'telefono_cliente' => '610123456', 'nif_cliente' => '12131415O', 'numero_personas' => 1, 'descuento' => 0.00, 'observaciones' => '', 'created_at' => now(), 'updated_at' => now()],
            ['intermediario_id' => 2, 'apartamento_id' => 1, 'tarifa_id' => 18, 'fecha_entrada' => '2024-11-01', 'fecha_salida' => '2024-11-08', 'nombre_cliente' => 'Eva Ortega', 'telefono_cliente' => '611234567', 'nif_cliente' => '13141516P', 'numero_personas' => 3, 'descuento' => 5.00, 'observaciones' => '', 'created_at' => now(), 'updated_at' => now()],
            ['intermediario_id' => 3, 'apartamento_id' => 2, 'tarifa_id' => 19, 'fecha_entrada' => '2024-11-10', 'fecha_salida' => '2024-11-12', 'nombre_cliente' => 'Jorge Vargas', 'telefono_cliente' => '612345678', 'nif_cliente' => '14151617Q', 'numero_personas' => 2, 'descuento' => 0.00, 'observaciones' => 'Viaje express', 'created_at' => now(), 'updated_at' => now()],
            ['intermediario_id' => 1, 'apartamento_id' => 3, 'tarifa_id' => 20, 'fecha_entrada' => '2024-12-01', 'fecha_salida' => '2024-12-10', 'nombre_cliente' => 'Natalia Ramos', 'telefono_cliente' => '613456789', 'nif_cliente' => '15161718R', 'numero_personas' => 4, 'descuento' => 15.00, 'observaciones' => 'Vacaciones familia', 'created_at' => now(), 'updated_at' => now()],
            ['intermediario_id' => 2, 'apartamento_id' => 4, 'tarifa_id' => 1, 'fecha_entrada' => '2024-12-15', 'fecha_salida' => '2024-12-22', 'nombre_cliente' => 'Tomás Gil', 'telefono_cliente' => '614567890', 'nif_cliente' => '16171819S', 'numero_personas' => 2, 'descuento' => 0.00, 'observaciones' => '', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
