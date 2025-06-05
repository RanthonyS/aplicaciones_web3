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
        Schema::create('informes', function (Blueprint $table) {
            $table->id('informe_gestion_id');
            $table->foreignId('docente_id')->constrained('docentes')->onDelete('cascade');
            $table->unsignedSmallInteger('mes')->nullable();
            $table->date('informe_date')->nullable();
            $table->string('conclusiones')->nullable();
            $table->string('recomendaciones')->nullable();
            $table->integer('estado')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('informes');
    }
};
