<?php

namespace Database\Seeders;

use App\Models\Intermediario;
use App\Models\User;
use Database\Seeders\IngresosSeeder;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //importante hacer el call desde aqui a los seeds q necesitemos, sin poner lo siguiente php artisan db:seed no funcionara

        $this->call(ApartamentosSeeder::class);
        $this->call(UsersSeeder::class);
        $this->call(TarifasSeeder::class);
        $this->call(IntermediariosSeeder::class);
        $this->call(GastosSeeder::class);
        $this->call(IngresosSeeder::class);

    }
}
