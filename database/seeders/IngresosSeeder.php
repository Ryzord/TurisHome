<?php

namespace Database\Seeders;

use App\Models\Ingreso;
use App\Models\Tarifa;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class IngresosSeeder extends Seeder
{
    public function run(): void
    {
        $datos = [
            ['intermediario_id' => 1, 'apartamento_id' => 1, 'tarifa_id' => 5, 'fecha_entrada' => '2025-01-10', 'fecha_salida' => '2025-01-15', 'nombre_cliente' => 'Juan Pérez', 'telefono_cliente' => '600123456', 'nif_cliente' => '12345678A', 'numero_personas' => 2, 'descuento' => 0.00, 'observaciones' => 'Cliente frecuente'],
            ['intermediario_id' => 2, 'apartamento_id' => 2, 'tarifa_id' => 8, 'fecha_entrada' => '2025-02-05', 'fecha_salida' => '2025-02-12', 'nombre_cliente' => 'María Gómez', 'telefono_cliente' => '600987654', 'nif_cliente' => '87654321B', 'numero_personas' => 4, 'descuento' => 10.00, 'observaciones' => ''],
            ['intermediario_id' => 1, 'apartamento_id' => 3, 'tarifa_id' => 4, 'fecha_entrada' => '2025-03-20', 'fecha_salida' => '2025-03-25', 'nombre_cliente' => 'Luis Martínez', 'telefono_cliente' => '601234567', 'nif_cliente' => '11223344C', 'numero_personas' => 3, 'descuento' => 5.00, 'observaciones' => 'Primera visita'],
            ['intermediario_id' => 3, 'apartamento_id' => 4, 'tarifa_id' => 3, 'fecha_entrada' => '2025-04-10', 'fecha_salida' => '2025-04-14', 'nombre_cliente' => 'Ana Ruiz', 'telefono_cliente' => '609876543', 'nif_cliente' => '55667788D', 'numero_personas' => 1, 'descuento' => 0.00, 'observaciones' => 'Estancia corta'],
            ['intermediario_id' => 2, 'apartamento_id' => 5, 'tarifa_id' => 6, 'fecha_entrada' => '2025-05-01', 'fecha_salida' => '2025-05-07', 'nombre_cliente' => 'Carlos Núñez', 'telefono_cliente' => '612345678', 'nif_cliente' => '99887766E', 'numero_personas' => 2, 'descuento' => 15.00, 'observaciones' => 'Reserva anticipada'],
            ['intermediario_id' => 1, 'apartamento_id' => 1, 'tarifa_id' => 10, 'fecha_entrada' => '2025-06-10', 'fecha_salida' => '2025-06-15', 'nombre_cliente' => 'Lucía Fernández', 'telefono_cliente' => '600111222', 'nif_cliente' => '22334455F', 'numero_personas' => 2, 'descuento' => 0.00, 'observaciones' => '', 'created_at' => now(), 'updated_at' => now()],
            ['intermediario_id' => 2, 'apartamento_id' => 2, 'tarifa_id' => 7, 'fecha_entrada' => '2025-06-20', 'fecha_salida' => '2025-06-25', 'nombre_cliente' => 'Pedro Sánchez', 'telefono_cliente' => '603456789', 'nif_cliente' => '33445566G', 'numero_personas' => 5, 'descuento' => 20.00, 'observaciones' => 'Grupo familiar', 'created_at' => now(), 'updated_at' => now()],
            ['intermediario_id' => 3, 'apartamento_id' => 3, 'tarifa_id' => 9, 'fecha_entrada' => '2025-07-01', 'fecha_salida' => '2025-07-10', 'nombre_cliente' => 'Beatriz López', 'telefono_cliente' => '602345678', 'nif_cliente' => '44556677H', 'numero_personas' => 3, 'descuento' => 0.00, 'observaciones' => '', 'created_at' => now(), 'updated_at' => now()],
            ['intermediario_id' => 1, 'apartamento_id' => 4, 'tarifa_id' => 11, 'fecha_entrada' => '2025-07-15', 'fecha_salida' => '2025-07-20', 'nombre_cliente' => 'Raúl Torres', 'telefono_cliente' => '604567890', 'nif_cliente' => '55667788I', 'numero_personas' => 1, 'descuento' => 0.00, 'observaciones' => 'Negocios', 'created_at' => now(), 'updated_at' => now()],
            ['intermediario_id' => 2, 'apartamento_id' => 5, 'tarifa_id' => 12, 'fecha_entrada' => '2025-08-01', 'fecha_salida' => '2025-08-05', 'nombre_cliente' => 'Isabel Moreno', 'telefono_cliente' => '605678901', 'nif_cliente' => '66778899J', 'numero_personas' => 2, 'descuento' => 5.00, 'observaciones' => '', 'created_at' => now(), 'updated_at' => now()],
            ['intermediario_id' => 1, 'apartamento_id' => 1, 'tarifa_id' => 13, 'fecha_entrada' => '2025-08-10', 'fecha_salida' => '2025-08-20', 'nombre_cliente' => 'Sofía Castro', 'telefono_cliente' => '606789012', 'nif_cliente' => '77889900K', 'numero_personas' => 4, 'descuento' => 10.00, 'observaciones' => 'Vacaciones verano', 'created_at' => now(), 'updated_at' => now()],
            ['intermediario_id' => 3, 'apartamento_id' => 2, 'tarifa_id' => 14, 'fecha_entrada' => '2025-09-01', 'fecha_salida' => '2025-09-07', 'nombre_cliente' => 'Daniel Romero', 'telefono_cliente' => '607890123', 'nif_cliente' => '88990011L', 'numero_personas' => 2, 'descuento' => 0.00, 'observaciones' => '', 'created_at' => now(), 'updated_at' => now()],
            ['intermediario_id' => 2, 'apartamento_id' => 3, 'tarifa_id' => 15, 'fecha_entrada' => '2025-09-10', 'fecha_salida' => '2025-09-15', 'nombre_cliente' => 'Miguel Navarro', 'telefono_cliente' => '608901234', 'nif_cliente' => '99001122M', 'numero_personas' => 3, 'descuento' => 10.00, 'observaciones' => '', 'created_at' => now(), 'updated_at' => now()],
            ['intermediario_id' => 3, 'apartamento_id' => 4, 'tarifa_id' => 16, 'fecha_entrada' => '2025-10-01', 'fecha_salida' => '2025-10-06', 'nombre_cliente' => 'Alba Serrano', 'telefono_cliente' => '609012345', 'nif_cliente' => '10111213N', 'numero_personas' => 2, 'descuento' => 0.00, 'observaciones' => 'Recomendación', 'created_at' => now(), 'updated_at' => now()],
            ['intermediario_id' => 1, 'apartamento_id' => 5, 'tarifa_id' => 17, 'fecha_entrada' => '2025-10-15', 'fecha_salida' => '2025-10-20', 'nombre_cliente' => 'Manuel Díaz', 'telefono_cliente' => '610123456', 'nif_cliente' => '12131415O', 'numero_personas' => 1, 'descuento' => 0.00, 'observaciones' => '', 'created_at' => now(), 'updated_at' => now()],
            ['intermediario_id' => 2, 'apartamento_id' => 1, 'tarifa_id' => 18, 'fecha_entrada' => '2025-11-01', 'fecha_salida' => '2025-11-08', 'nombre_cliente' => 'Eva Ortega', 'telefono_cliente' => '611234567', 'nif_cliente' => '13141516P', 'numero_personas' => 3, 'descuento' => 5.00, 'observaciones' => '', 'created_at' => now(), 'updated_at' => now()],
            ['intermediario_id' => 3, 'apartamento_id' => 2, 'tarifa_id' => 19, 'fecha_entrada' => '2025-11-10', 'fecha_salida' => '2025-11-12', 'nombre_cliente' => 'Jorge Vargas', 'telefono_cliente' => '612345678', 'nif_cliente' => '14151617Q', 'numero_personas' => 2, 'descuento' => 0.00, 'observaciones' => 'Viaje express', 'created_at' => now(), 'updated_at' => now()],
            ['intermediario_id' => 1, 'apartamento_id' => 3, 'tarifa_id' => 20, 'fecha_entrada' => '2025-12-01', 'fecha_salida' => '2025-12-10', 'nombre_cliente' => 'Natalia Ramos', 'telefono_cliente' => '613456789', 'nif_cliente' => '15161718R', 'numero_personas' => 4, 'descuento' => 15.00, 'observaciones' => 'Vacaciones familia', 'created_at' => now(), 'updated_at' => now()],
            ['intermediario_id' => 2, 'apartamento_id' => 4, 'tarifa_id' => 1, 'fecha_entrada' => '2025-12-15', 'fecha_salida' => '2025-12-22', 'nombre_cliente' => 'Tomás Gil', 'telefono_cliente' => '614567890', 'nif_cliente' => '16171819S', 'numero_personas' => 2, 'descuento' => 0.00, 'observaciones' => '', 'created_at' => now(), 'updated_at' => now()],
            ['intermediario_id' => 1, 'apartamento_id' => 1, 'tarifa_id' => 1, 'fecha_entrada' => '2025-01-02', 'fecha_salida' => '2025-01-06', 'nombre_cliente' => 'Luis García', 'telefono_cliente' => '600000001', 'nif_cliente' => '12345678A', 'numero_personas' => 2, 'descuento' => 0.00, 'observaciones' => '', 'created_at' => now(), 'updated_at' => now()],
            ['intermediario_id' => 2, 'apartamento_id' => 2, 'tarifa_id' => 2, 'fecha_entrada' => '2025-01-10', 'fecha_salida' => '2025-01-15', 'nombre_cliente' => 'Ana López', 'telefono_cliente' => '600000002', 'nif_cliente' => '23456789B', 'numero_personas' => 1, 'descuento' => 10.00, 'observaciones' => 'Cliente habitual', 'created_at' => now(), 'updated_at' => now()],
            ['intermediario_id' => 3, 'apartamento_id' => 3, 'tarifa_id' => 3, 'fecha_entrada' => '2025-01-20', 'fecha_salida' => '2025-01-25', 'nombre_cliente' => 'Pedro Martínez', 'telefono_cliente' => '600000003', 'nif_cliente' => '34567890C', 'numero_personas' => 3, 'descuento' => 0.00, 'observaciones' => '', 'created_at' => now(), 'updated_at' => now()],
            ['intermediario_id' => 1, 'apartamento_id' => 4, 'tarifa_id' => 1, 'fecha_entrada' => '2025-01-28', 'fecha_salida' => '2025-02-02', 'nombre_cliente' => 'Lucía Romero', 'telefono_cliente' => '600000004', 'nif_cliente' => '45678901D', 'numero_personas' => 2, 'descuento' => 5.00, 'observaciones' => 'Recomendado por Airbnb', 'created_at' => now(), 'updated_at' => now()],
            ['intermediario_id' => 2, 'apartamento_id' => 5, 'tarifa_id' => 2, 'fecha_entrada' => '2025-02-05', 'fecha_salida' => '2025-02-10', 'nombre_cliente' => 'Marta Navarro', 'telefono_cliente' => '600000005', 'nif_cliente' => '56789012E', 'numero_personas' => 2, 'descuento' => 0.00, 'observaciones' => '', 'created_at' => now(), 'updated_at' => now()],
            ['intermediario_id' => 3, 'apartamento_id' => 1, 'tarifa_id' => 3, 'fecha_entrada' => '2025-02-12', 'fecha_salida' => '2025-02-18', 'nombre_cliente' => 'Carlos Ruiz', 'telefono_cliente' => '600000006', 'nif_cliente' => '67890123F', 'numero_personas' => 1, 'descuento' => 0.00, 'observaciones' => 'Viaje de trabajo', 'created_at' => now(), 'updated_at' => now()],
            ['intermediario_id' => 1, 'apartamento_id' => 2, 'tarifa_id' => 1, 'fecha_entrada' => '2025-02-20', 'fecha_salida' => '2025-02-25', 'nombre_cliente' => 'Sandra León', 'telefono_cliente' => '600000007', 'nif_cliente' => '78901234G', 'numero_personas' => 4, 'descuento' => 15.00, 'observaciones' => '', 'created_at' => now(), 'updated_at' => now()],
            ['intermediario_id' => 2, 'apartamento_id' => 3, 'tarifa_id' => 2, 'fecha_entrada' => '2025-03-01', 'fecha_salida' => '2025-03-05', 'nombre_cliente' => 'Iván Castro', 'telefono_cliente' => '600000008', 'nif_cliente' => '89012345H', 'numero_personas' => 2, 'descuento' => 0.00, 'observaciones' => '', 'created_at' => now(), 'updated_at' => now()],
            ['intermediario_id' => 3, 'apartamento_id' => 4, 'tarifa_id' => 3, 'fecha_entrada' => '2025-03-10', 'fecha_salida' => '2025-03-15', 'nombre_cliente' => 'Raquel Jiménez', 'telefono_cliente' => '600000009', 'nif_cliente' => '90123456I', 'numero_personas' => 2, 'descuento' => 0.00, 'observaciones' => 'Cliente nuevo', 'created_at' => now(), 'updated_at' => now()],
            ['intermediario_id' => 1, 'apartamento_id' => 5, 'tarifa_id' => 1, 'fecha_entrada' => '2025-03-20', 'fecha_salida' => '2025-03-25', 'nombre_cliente' => 'Óscar Delgado', 'telefono_cliente' => '600000010', 'nif_cliente' => '01234567J', 'numero_personas' => 3, 'descuento' => 5.00, 'observaciones' => '', 'created_at' => now(), 'updated_at' => now()],
            ['intermediario_id' => 2, 'apartamento_id' => 1, 'tarifa_id' => 2, 'fecha_entrada' => '2025-04-01', 'fecha_salida' => '2025-04-06', 'nombre_cliente' => 'Beatriz Mora', 'telefono_cliente' => '600000011', 'nif_cliente' => '11111111K', 'numero_personas' => 2, 'descuento' => 0.00, 'observaciones' => '', 'created_at' => now(), 'updated_at' => now()],
            ['intermediario_id' => 3, 'apartamento_id' => 2, 'tarifa_id' => 3, 'fecha_entrada' => '2025-04-10', 'fecha_salida' => '2025-04-15', 'nombre_cliente' => 'Sergio Vidal', 'telefono_cliente' => '600000012', 'nif_cliente' => '22222222L', 'numero_personas' => 1, 'descuento' => 20.00, 'observaciones' => 'Descuento por cancelación anterior', 'created_at' => now(), 'updated_at' => now()],
            ['intermediario_id' => 1, 'apartamento_id' => 3, 'tarifa_id' => 1, 'fecha_entrada' => '2025-04-20', 'fecha_salida' => '2025-04-24', 'nombre_cliente' => 'Nuria Campos', 'telefono_cliente' => '600000013', 'nif_cliente' => '33333333M', 'numero_personas' => 3, 'descuento' => 5.00, 'observaciones' => '', 'created_at' => now(), 'updated_at' => now()],
            ['intermediario_id' => 2, 'apartamento_id' => 4, 'tarifa_id' => 2, 'fecha_entrada' => '2025-04-28', 'fecha_salida' => '2025-05-03', 'nombre_cliente' => 'Tomás Rivas', 'telefono_cliente' => '600000014', 'nif_cliente' => '44444444N', 'numero_personas' => 2, 'descuento' => 0.00, 'observaciones' => '', 'created_at' => now(), 'updated_at' => now()],
            ['intermediario_id' => 3, 'apartamento_id' => 5, 'tarifa_id' => 3, 'fecha_entrada' => '2025-05-05', 'fecha_salida' => '2025-05-10', 'nombre_cliente' => 'Silvia Reina', 'telefono_cliente' => '600000015', 'nif_cliente' => '55555555P', 'numero_personas' => 2, 'descuento' => 0.00, 'observaciones' => '', 'created_at' => now(), 'updated_at' => now()],
            ['intermediario_id' => 1, 'apartamento_id' => 1, 'tarifa_id' => 1, 'fecha_entrada' => '2025-05-15', 'fecha_salida' => '2025-05-20', 'nombre_cliente' => 'Jorge Bravo', 'telefono_cliente' => '600000016', 'nif_cliente' => '66666666Q', 'numero_personas' => 2, 'descuento' => 0.00, 'observaciones' => '', 'created_at' => now(), 'updated_at' => now()],
            ['intermediario_id' => 2, 'apartamento_id' => 2, 'tarifa_id' => 2, 'fecha_entrada' => '2025-06-01', 'fecha_salida' => '2025-06-05', 'nombre_cliente' => 'Cristina Peña', 'telefono_cliente' => '600000017', 'nif_cliente' => '77777777R', 'numero_personas' => 2, 'descuento' => 10.00, 'observaciones' => 'Promoción de temporada baja', 'created_at' => now(), 'updated_at' => now()],
            ['intermediario_id' => 3, 'apartamento_id' => 3, 'tarifa_id' => 3, 'fecha_entrada' => '2025-06-10', 'fecha_salida' => '2025-06-15', 'nombre_cliente' => 'Pablo Sierra', 'telefono_cliente' => '600000018', 'nif_cliente' => '88888888S', 'numero_personas' => 3, 'descuento' => 0.00, 'observaciones' => '', 'created_at' => now(), 'updated_at' => now()],
            ['intermediario_id' => 1, 'apartamento_id' => 4, 'tarifa_id' => 1, 'fecha_entrada' => '2025-06-20', 'fecha_salida' => '2025-06-25', 'nombre_cliente' => 'Ángela Torres', 'telefono_cliente' => '600000019', 'nif_cliente' => '99999999T', 'numero_personas' => 2, 'descuento' => 5.00, 'observaciones' => 'Recomendación interna', 'created_at' => now(), 'updated_at' => now()],
            ['intermediario_id' => 2, 'apartamento_id' => 5, 'tarifa_id' => 2, 'fecha_entrada' => '2025-06-28', 'fecha_salida' => '2025-07-03', 'nombre_cliente' => 'Elena Márquez', 'telefono_cliente' => '600000020', 'nif_cliente' => '00000000U', 'numero_personas' => 1, 'descuento' => 0.00, 'observaciones' => '', 'created_at' => now(), 'updated_at' => now()],
        ];


        //aqui vamos a poner toda la logia del controlador para que al poner php artisan db:seed nos pueda hacer todos los calculos, si no de esta manera si usamos ese comando, nos pone en la bbdd toodos los registros, pero sin los calculos
        foreach ($datos as $dato) {
            $fecha_entrada = Carbon::parse($dato['fecha_entrada']);
            $fecha_salida = Carbon::parse($dato['fecha_salida']);
            $noches = $fecha_entrada->diffInDays($fecha_salida);

            $tarifa = Tarifa::findOrFail($dato['tarifa_id']);

            $precio_base = $tarifa->coste_tarifa * $dato['numero_personas'] * $noches;
            $precio_descuento = $precio_base * ($dato['descuento'] / 100);
            $descuento_aplicado = $precio_base - $precio_descuento;
            $total_iva = $descuento_aplicado * ($tarifa->tarifa_aplicada / 100);
            $total_factura = $descuento_aplicado + $total_iva;

            Ingreso::create([
                'intermediario_id' => $dato['intermediario_id'],
                'apartamento_id' => $dato['apartamento_id'],
                'tarifa_id' => $dato['tarifa_id'],
                'fecha_entrada' => $dato['fecha_entrada'],
                'fecha_salida' => $dato['fecha_salida'],
                'nombre_cliente' => $dato['nombre_cliente'],
                'telefono_cliente' => $dato['telefono_cliente'],
                'nif_cliente' => $dato['nif_cliente'],
                'numero_personas' => $dato['numero_personas'],
                'descuento' => $dato['descuento'],
                'observaciones' => $dato['observaciones'],
                'numero_noches' => $noches,
                'total_iva' => $total_iva,
                'total_factura' => $total_factura,
            ]);
        }
    }
}
