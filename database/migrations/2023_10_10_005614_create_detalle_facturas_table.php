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
        Schema::create('detalle_facturas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('cod_factura');
            $table->foreign('cod_factura')
                ->references('id')
                ->on('facturas')
                ->onDelete('cascade');
            $table->unsignedbigInteger('cod_articulo');
            $table->foreign('cod_articulo')
                ->references('id')
                ->on('articulos')
                ->onDelete('cascade');
            $table->bigInteger('cantidad');
            $table->decimal('total', 10,2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detalle_facturas');
    }
};
