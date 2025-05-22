<?php

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
        $intermediarios = Intermediario::all();
        $apartamentos = Apartamento::all();
        $tarifas = Tarifa::all();

        if ($intermediarios->isEmpty() || $apartamentos->isEmpty() || $tarifas->isEmpty()) {
            $this->command->warn('Necesitas primero seeders para Intermediarios, Apartamentos y Tarifas');
            return;
        }

        foreach (range(1, 20) as $i) {
            $fechaEntrada = now()->subDays(rand(1, 60));
            $fechaSalida = (clone $fechaEntrada)->addDays(rand(2, 15));

            Ingreso::create([
                'intermediario_id' => $intermediarios->random()->id,
                'apartamento_id' => $apartamentos->random()->id,
                'fecha_entrada' => $fechaEntrada,
                'fecha_salida' => $fechaSalida,
                'numero_personas' => rand(1, 6),
                'nombre_cliente' => fake()->name(),
                'nif_cliente' => strtoupper(fake()->bothify('########?')),
                'telefono_cliente' => fake()->phoneNumber(),
                'tarifa_aplicada' => $tarifas->random()->id,
                'descuento' => fake()->randomFloat(2, 0, 25),
                'total_iva' => fake()->randomFloat(2, 5, 100),
                'total_factura' => fake()->randomFloat(2, 100, 1000),
                'observaciones' => fake()->sentence(),
            ]);
        }
    }
}
