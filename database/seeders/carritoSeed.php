<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class carritoSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i < 10; $i++) {
            DB::table('carritos')->insert([
                'producto' => Str::random(10), 
                'cantidad' => rand(1, 5), 
                'precio_producto' => rand(10, 50) + (rand(1, 99) / 100), //aqui se genera un numero random con decimales
                'total' => rand(10, 100) + (rand(1, 99) / 100), //aqui mas de lo mismo
            ]);
        }
    }
}
