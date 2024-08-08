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
        Schema::create('aspirantes', function (Blueprint $table) {
            $table->id();
            $table->string('dni', 13)->unique();
            $table->string('nombre', 200);
            $table->string('departamento', 200);
            $table->string('municipio', 200);
            $table->string('comunidad', 200);
            $table->string('barrio', 200);
            $table->decimal('ingresomensual', 12,2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('aspirantes');
    }
};
