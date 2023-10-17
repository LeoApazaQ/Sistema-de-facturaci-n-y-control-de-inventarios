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
        Schema::create('devoluciones', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('cod_detalle_factura');
            $table->foreign('cod_detalle_factura')
            ->references('id')
            ->on('detalle_facturas')
            ->onDelete('cascade');
            $table->string('motivo', 11);
            $table->string('fecha_devolucion', 10);
            $table->bigInteger('cantidad');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('devoluciones');
    }
};
