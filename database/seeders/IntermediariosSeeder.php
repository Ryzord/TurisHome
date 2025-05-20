<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IntermediariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('intermediarios')->insert([
            ['nombre' => 'Carlos', 'apellidos' => 'González Márquez', 'correo_electronico' => 'carlos1@correo.com', 'telefono' => '600111111', 'comision' => 10.50, 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Laura', 'apellidos' => 'Sánchez Ruiz', 'correo_electronico' => 'laura2@correo.com', 'telefono' => '600111112', 'comision' => 12.75, 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Miguel', 'apellidos' => 'Ramírez Soto', 'correo_electronico' => 'miguel3@correo.com', 'telefono' => '600111113', 'comision' => 8.30, 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Sofía', 'apellidos' => 'Martínez Díaz', 'correo_electronico' => 'sofia4@correo.com', 'telefono' => '600111114', 'comision' => 11.90, 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Javier', 'apellidos' => 'Moreno Castro', 'correo_electronico' => 'javier5@correo.com', 'telefono' => '600111115', 'comision' => 9.00, 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Valentina', 'apellidos' => 'Navarro Reyes', 'correo_electronico' => 'valentina6@correo.com', 'telefono' => '600111116', 'comision' => 13.25, 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Luis', 'apellidos' => 'Pérez Gallardo', 'correo_electronico' => 'luis7@correo.com', 'telefono' => '600111117', 'comision' => 10.00, 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Camila', 'apellidos' => 'Rojas Fernández', 'correo_electronico' => 'camila8@correo.com', 'telefono' => '600111118', 'comision' => 7.45, 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Andrés', 'apellidos' => 'Delgado Vidal', 'correo_electronico' => 'andres9@correo.com', 'telefono' => '600111119', 'comision' => 14.10, 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Isabela', 'apellidos' => 'Romero Peña', 'correo_electronico' => 'isabela10@correo.com', 'telefono' => '600111120', 'comision' => 9.75, 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Daniel', 'apellidos' => 'Molina Torres', 'correo_electronico' => 'daniel11@correo.com', 'telefono' => '600111121', 'comision' => 11.00, 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Paula', 'apellidos' => 'Carrillo Lozano', 'correo_electronico' => 'paula12@correo.com', 'telefono' => '600111122', 'comision' => 10.30, 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Diego', 'apellidos' => 'Ortega Salas', 'correo_electronico' => 'diego13@correo.com', 'telefono' => '600111123', 'comision' => 12.10, 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Lucía', 'apellidos' => 'Cabrera Cano', 'correo_electronico' => 'lucia14@correo.com', 'telefono' => '600111124', 'comision' => 6.50, 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Ángel', 'apellidos' => 'Ibáñez Vera', 'correo_electronico' => 'angel15@correo.com', 'telefono' => '600111125', 'comision' => 13.60, 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Elena', 'apellidos' => 'Blanco León', 'correo_electronico' => 'elena16@correo.com', 'telefono' => '600111126', 'comision' => 7.90, 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Santiago', 'apellidos' => 'Fuentes Bravo', 'correo_electronico' => 'santiago17@correo.com', 'telefono' => '600111127', 'comision' => 8.80, 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Marina', 'apellidos' => 'Aguilar Nieto', 'correo_electronico' => 'marina18@correo.com', 'telefono' => '600111128', 'comision' => 10.20, 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Iván', 'apellidos' => 'Herrera Campos', 'correo_electronico' => 'ivan19@correo.com', 'telefono' => '600111129', 'comision' => 9.35, 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Carla', 'apellidos' => 'Serrano Domínguez', 'correo_electronico' => 'carla20@correo.com', 'telefono' => '600111130', 'comision' => 12.95, 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
