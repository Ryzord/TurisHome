<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ApartamentosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('apartamentos')->insert([
            ['direccion' => 'Av. Siempre Viva 742', 'ciudad' => 'Springfield', 'pais' => 'Estados Unidos', 'codigo_postal' => '12345', 'precio_venta' => 120000.00, 'created_at' => now(), 'updated_at' => now()],
            ['direccion' => 'Calle Falsa 123', 'ciudad' => 'Madrid', 'pais' => 'España', 'codigo_postal' => '28080', 'precio_venta' => 95000.50, 'created_at' => now(), 'updated_at' => now()],
            ['direccion' => 'Rua das Flores 45', 'ciudad' => 'Lisboa', 'pais' => 'Portugal', 'codigo_postal' => '1000-123', 'precio_venta' => 80000.00, 'created_at' => now(), 'updated_at' => now()],
            ['direccion' => 'Via Roma 10', 'ciudad' => 'Roma', 'pais' => 'Italia', 'codigo_postal' => '00100', 'precio_venta' => 150000.75, 'created_at' => now(), 'updated_at' => now()],
            ['direccion' => 'Unter den Linden 5', 'ciudad' => 'Berlín', 'pais' => 'Alemania', 'codigo_postal' => '10117', 'precio_venta' => 132500.99, 'created_at' => now(), 'updated_at' => now()],
            ['direccion' => 'Boulevard Saint-Michel 12', 'ciudad' => 'París', 'pais' => 'Francia', 'codigo_postal' => '75005', 'precio_venta' => 175000.00, 'created_at' => now(), 'updated_at' => now()],
            ['direccion' => 'Oxford Street 221B', 'ciudad' => 'Londres', 'pais' => 'Reino Unido', 'codigo_postal' => 'W1D 1NN', 'precio_venta' => 200000.50, 'created_at' => now(), 'updated_at' => now()],
            ['direccion' => 'Avenida Paulista 1578', 'ciudad' => 'São Paulo', 'pais' => 'Brasil', 'codigo_postal' => '01310-200', 'precio_venta' => 110000.00, 'created_at' => now(), 'updated_at' => now()],
            ['direccion' => 'King Street 45', 'ciudad' => 'Toronto', 'pais' => 'Canadá', 'codigo_postal' => 'M5H 1J8', 'precio_venta' => 140000.75, 'created_at' => now(), 'updated_at' => now()],
            ['direccion' => 'Soi Sukhumvit 24', 'ciudad' => 'Bangkok', 'pais' => 'Tailandia', 'codigo_postal' => '10110', 'precio_venta' => 90000.99, 'created_at' => now(), 'updated_at' => now()],
            ['direccion' => 'Calle 50 #20-30', 'ciudad' => 'Bogotá', 'pais' => 'Colombia', 'codigo_postal' => '110111', 'precio_venta' => 95000.00, 'created_at' => now(), 'updated_at' => now()],
            ['direccion' => 'Avenida Libertador 1001', 'ciudad' => 'Buenos Aires', 'pais' => 'Argentina', 'codigo_postal' => 'C1425', 'precio_venta' => 125000.50, 'created_at' => now(), 'updated_at' => now()],
            ['direccion' => 'Queen Street 15', 'ciudad' => 'Auckland', 'pais' => 'Nueva Zelanda', 'codigo_postal' => '1010', 'precio_venta' => 130000.00, 'created_at' => now(), 'updated_at' => now()],
            ['direccion' => 'Kaiserstrasse 89', 'ciudad' => 'Viena', 'pais' => 'Austria', 'codigo_postal' => '1010', 'precio_venta' => 145000.75, 'created_at' => now(), 'updated_at' => now()],
            ['direccion' => 'Laugavegur 10', 'ciudad' => 'Reikiavik', 'pais' => 'Islandia', 'codigo_postal' => '101', 'precio_venta' => 160000.00, 'created_at' => now(), 'updated_at' => now()],
            ['direccion' => 'Rue de la Paix 7', 'ciudad' => 'Bruselas', 'pais' => 'Bélgica', 'codigo_postal' => '1000', 'precio_venta' => 115000.99, 'created_at' => now(), 'updated_at' => now()],
            ['direccion' => 'Via della Conciliazione 25', 'ciudad' => 'Vaticano', 'pais' => 'Ciudad del Vaticano', 'codigo_postal' => '00120', 'precio_venta' => 180000.00, 'created_at' => now(), 'updated_at' => now()],
            ['direccion' => 'Tverskaya Street 3', 'ciudad' => 'Moscú', 'pais' => 'Rusia', 'codigo_postal' => '125009', 'precio_venta' => 140000.00, 'created_at' => now(), 'updated_at' => now()],
            ['direccion' => 'Jalan Sudirman 50', 'ciudad' => 'Jakarta', 'pais' => 'Indonesia', 'codigo_postal' => '10220', 'precio_venta' => 95000.75, 'created_at' => now(), 'updated_at' => now()],
            ['direccion' => 'Elgin Street 21', 'ciudad' => 'Edimburgo', 'pais' => 'Reino Unido', 'codigo_postal' => 'EH2 4PA', 'precio_venta' => 120000.50, 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
