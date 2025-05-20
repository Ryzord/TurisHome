<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TarifasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tarifas')->insert([
            ['nombre_tarifa' => 'Tarifa Estándar', 'tarifa_aplicada' => 10.00, 'coste_tarifa' => 8.50, 'created_at' => now(), 'updated_at' => now()],
            ['nombre_tarifa' => 'Tarifa Premium', 'tarifa_aplicada' => 20.00, 'coste_tarifa' => 15.75, 'created_at' => now(), 'updated_at' => now()],
            ['nombre_tarifa' => 'Tarifa Económica', 'tarifa_aplicada' => 7.50, 'coste_tarifa' => 6.00, 'created_at' => now(), 'updated_at' => now()],
            ['nombre_tarifa' => 'Tarifa Business', 'tarifa_aplicada' => 30.00, 'coste_tarifa' => 22.00, 'created_at' => now(), 'updated_at' => now()],
            ['nombre_tarifa' => 'Tarifa Nocturna', 'tarifa_aplicada' => 12.00, 'coste_tarifa' => 10.00, 'created_at' => now(), 'updated_at' => now()],
            ['nombre_tarifa' => 'Tarifa Fin de Semana', 'tarifa_aplicada' => 18.00, 'coste_tarifa' => 14.50, 'created_at' => now(), 'updated_at' => now()],
            ['nombre_tarifa' => 'Tarifa Festivos', 'tarifa_aplicada' => 25.00, 'coste_tarifa' => 20.00, 'created_at' => now(), 'updated_at' => now()],
            ['nombre_tarifa' => 'Tarifa Mensual', 'tarifa_aplicada' => 300.00, 'coste_tarifa' => 250.00, 'created_at' => now(), 'updated_at' => now()],
            ['nombre_tarifa' => 'Tarifa Estudiante', 'tarifa_aplicada' => 8.00, 'coste_tarifa' => 6.50, 'created_at' => now(), 'updated_at' => now()],
            ['nombre_tarifa' => 'Tarifa Familiar', 'tarifa_aplicada' => 22.00, 'coste_tarifa' => 17.00, 'created_at' => now(), 'updated_at' => now()],
            ['nombre_tarifa' => 'Tarifa Último Minuto', 'tarifa_aplicada' => 9.50, 'coste_tarifa' => 7.80, 'created_at' => now(), 'updated_at' => now()],
            ['nombre_tarifa' => 'Tarifa Madrugador', 'tarifa_aplicada' => 11.00, 'coste_tarifa' => 9.00, 'created_at' => now(), 'updated_at' => now()],
            ['nombre_tarifa' => 'Tarifa Corporativa', 'tarifa_aplicada' => 35.00, 'coste_tarifa' => 28.00, 'created_at' => now(), 'updated_at' => now()],
            ['nombre_tarifa' => 'Tarifa Especial', 'tarifa_aplicada' => 16.00, 'coste_tarifa' => 12.75, 'created_at' => now(), 'updated_at' => now()],
            ['nombre_tarifa' => 'Tarifa por Hora', 'tarifa_aplicada' => 5.00, 'coste_tarifa' => 4.00, 'created_at' => now(), 'updated_at' => now()],
            ['nombre_tarifa' => 'Tarifa por Día', 'tarifa_aplicada' => 45.00, 'coste_tarifa' => 35.00, 'created_at' => now(), 'updated_at' => now()],
            ['nombre_tarifa' => 'Tarifa por Semana', 'tarifa_aplicada' => 200.00, 'coste_tarifa' => 160.00, 'created_at' => now(), 'updated_at' => now()],
            ['nombre_tarifa' => 'Tarifa de Verano', 'tarifa_aplicada' => 19.00, 'coste_tarifa' => 15.00, 'created_at' => now(), 'updated_at' => now()],
            ['nombre_tarifa' => 'Tarifa de Invierno', 'tarifa_aplicada' => 17.50, 'coste_tarifa' => 13.50, 'created_at' => now(), 'updated_at' => now()],
            ['nombre_tarifa' => 'Tarifa de Primavera', 'tarifa_aplicada' => 15.00, 'coste_tarifa' => 12.00, 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
