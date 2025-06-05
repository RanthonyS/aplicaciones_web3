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
        Schema::create('actividades', function (Blueprint $table) {
            $table->id('actividad_id');
            $table->foreignId('informe_gestion_id')->constrained('informes')->onDelete('cascade');
            $table->date('fecha_actividad')->nullable();
            $table->string('indicador_gestion')->nullable();
            $table->string('parametro_gestion')->nullable();
            $table->string('acciones')->nullable();
            $table->string('resultado')->nullable();
            $table->decimal('estado', 10, 2)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('actividades');
    }
};
