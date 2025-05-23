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
        Schema::create('ingresos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('intermediario_id')->constrained()->onDelete('cascade');
            $table->foreignId('apartamento_id')->constrained()->onDelete('cascade');
            $table->date('fecha_entrada');
            $table->date('fecha_salida');
            $table->tinyInteger('numero_noches')->nullable();
            $table->string('nombre_cliente');
            $table->string('nif_cliente')->nullable();
            $table->string('telefono_cliente');
            $table->tinyInteger('numero_personas')->default(1);
            $table->foreignId('tarifa_id')->constrained()->onDelete('cascade');
            $table->decimal('descuento', 5, 2)->default(0);
            $table->decimal('total_iva', 10, 2);
            $table->decimal('total_factura', 10, 2);
            $table->string('observaciones')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ingresos');
    }
};
