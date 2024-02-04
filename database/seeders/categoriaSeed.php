<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class categoriaSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i < 10; $i++) {
            DB::table('categorias')->insert([
                'id_categoria' => rand(1, 50),
                'nombre' => Str::random(8), 
                'descripcion' => Str::random(10), 
            ]);
        }
    }
}
