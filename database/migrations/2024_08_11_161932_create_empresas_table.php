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
        Schema::create('empresas', function (Blueprint $table) {
            $table->id();
            $table->string('rtn', 13);
            $table->string("nombre_razon_social", 255);
            $table->string("eslogan", 255);
            $table->string("direccion", 255);
            $table->string("telefonos", 200);
            $table->string("propietario", 200);
            $table->string("correo", 200);
            $table->string("website", 200)->nullable();
            $table->string("logo_principal", 255)->nullable();
            $table->string("logo_secundario", 255)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('empresas');
    }
};
