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
        Schema::create('gastos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('apartamento_id')->constrained()->onDelete('cascade');
            $table->decimal('gasto_factura_sin_iva', 10, 2);
            $table->string('concepto_gasto');
            $table->date('fecha');
            $table->string('nif_proveedor')->nullable();
            $table->decimal('iva', 5, 2)->nullable();
            $table->decimal('total_iva', 10, 2)->nullable();
            $table->decimal('total_gasto', 10, 2)->default(0);
            $table->boolean('pagado');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gastos');
    }
};
