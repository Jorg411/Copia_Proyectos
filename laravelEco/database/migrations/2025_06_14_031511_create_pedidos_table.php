<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('pedidos', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('user_id'); // Relación con users
        $table->string('producto');
        $table->integer('cantidad');
        $table->decimal('precio_total', 8, 2);
        $table->string('estado')->default('pendiente');
        $table->timestamps();

        // Clave foránea
        $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
    });
}
};
