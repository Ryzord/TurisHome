<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         DB::table('users')->insert([
            ['name' => 'Ruben', 'email' => 'ruben@gmail.com', 'password' => '$2y$12$L.SUj6Wut5icIX/bLKIixeYx1PmlqUN0DoPAsUSubOVJA7qMpu55u'],
            ['name' => 'Antonio', 'email' => 'antonio.boronat@gmail.com', 'password' => '$2y$12$L.SUj6Wut5icIX/bLKIixeYx1PmlqUN0DoPAsUSubOVJA7qMpu55u'],

        ]);
    }
}
