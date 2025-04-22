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
            $table->string('nombre', 50); // VARCHAR(50) NOT NULL
            $table->string('apellido', 50); // VARCHAR(50) NOT NULL
            $table->integer('edad'); // INT NOT NULL
            $table->string('telefono', 20)->nullable(); // VARCHAR(20), puede ser NULL
            $table->enum('genero', ['Masculino', 'Femenino', 'Otro']); // ENUM
            $table->string('password', 255); // VARCHAR(255)
            $table->enum('rol', ['admin', 'cliente'])->default('cliente'); // ENUM con default
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
