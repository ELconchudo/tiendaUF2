<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class productoSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i < 10; $i++) {
            DB::table('productos')->insert([
                'id_producto' => rand(1, 50),
                'nombre' => Str::random(5), 
                'descripcion' => Str::random(10), 
                'unidades' => rand(1, 50), 
                'precio_unitario' => rand(10, 100) + (rand(1, 99) / 100), //numero random con decimales
                'categoria' => Str::random(8), 
            ]);
        }
    }
}
