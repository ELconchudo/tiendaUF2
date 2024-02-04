<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id();
            $table->string('nick');     //migracion de los usuarios
            $table->string('email');
            $table->string('nombre');
            $table->string('apellidos');
            $table->string('dni');
            $table->date('fecha_nacimiento');
            $table->string('contrasena');
            $table->enum('rol', ['usuario normal', 'administrador']); //en el campo rol solo se pueden poner dos valores
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuarios');
    }
};
