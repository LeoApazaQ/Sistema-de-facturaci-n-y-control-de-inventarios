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
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('documento');
            $table->unsignedBigInteger('cod_tipo_documento');
            $table->foreign('cod_tipo_documento')
                ->references('id')
                ->on('tipo_documentos')
                ->onDelete('cascade');
            $table->string('nombres', 30);
            $table->string('apellidos', 30);
            $table->string('direccion', 60);
            $table->unsignedBigInteger('cod_ciudad');
            $table->foreign('cod_ciudad')
                ->references('id')
                ->on('ciudades')
                ->onDelete('cascade');
            $table->integer('telefono');
            $table->timestamps();
        });
    }
    
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clientes');
    }
};
