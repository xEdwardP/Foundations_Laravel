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
        Schema::create('asistencias', function (Blueprint $table) {
            $table->id();
            $table->string('cuenta_est', 9);
            $table->string('asunto', 255);
            $table->text('detalle');
            $table->string('estado', 30)->default('En Curso');
            $table->timestamps();
            $table->foreign('cuenta_est')->references('cuenta')->on('estudiantes');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('asistencias');
    }
};
