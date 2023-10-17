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
        Schema::create('facturas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('cod_cliente');
            $table->foreign('cod_cliente')
                ->references('id')
                ->on('clientes')
                ->onDelete('cascade');  
            $table->string('nombre_empleado', 30);
            $table->date('fecha_facturaciom');
            $table->unsignedBigInteger('cod_forma_pago');
            $table->foreign('cod_forma_pago')
                ->references('id')
                ->on('forma_pagos')
                ->onDelete('cascade');  
            $table->decimal('total_factura', 10,2);
            $table->decimal('iva', 10,2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('facturas');
    }
};
