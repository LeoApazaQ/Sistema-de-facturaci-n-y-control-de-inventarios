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
        Schema::create('articulos', function (Blueprint $table) {
            $table->id();
            $table->string('descripcion', 30);
            $table->bigInteger('precio_venta');
            $table->bigInteger('precio_costo');
            $table->bigInteger('stock');
            $table->unsignedBigInteger('cod_tipo_articulo');
            $table->foreign('cod_tipo_articulo')
                ->references('id')
                ->on('tipo_articulos')
                ->onDelete('cascade');  
            $table->unsignedBigInteger('cod_proveedor');
            $table->foreign('cod_proveedor')
                ->references('id')
                ->on('proveedores')
                ->onDelete('cascade');  
            $table->date('fecha_ingreso');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('articulos');
    }
};
