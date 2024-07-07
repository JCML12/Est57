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
        Schema::create('images', function (Blueprint $table) {
            $table->id();
            //ID del evento
            $table->unsignedBigInteger('eventos_id');
            //ruta de la imagen
            $table->string('ruta');

            //relacion con la tabla de eventos
            $table->foreign('eventos_id')->references('id')->on('eventos')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('images');
    }
};
