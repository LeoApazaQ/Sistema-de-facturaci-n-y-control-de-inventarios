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
        Schema::create('proveedores', function (Blueprint $table) {
            $table->id();
            $table->BigInteger('documento');
            $table->unsignedBigInteger('cod_tipo_documento');
            $table->foreign('cod_tipo_documento')
                ->references('id')
                ->on('tipo_documentos')
                ->onDelete('cascade');  
            $table->string('nombre', 30);
            $table->string('apellido', 30);
            $table->string('nombre_comercial', 50);
            $table->string('direccion', 60);
            $table->unsignedBigInteger('cod_ciudad');
            $table->foreign('cod_ciudad')
                ->references('id')
                ->on('ciudades')
                ->onDelete('cascade');      
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('proveedores');
    }
};
