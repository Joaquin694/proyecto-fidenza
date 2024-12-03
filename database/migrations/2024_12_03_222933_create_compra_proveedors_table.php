<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('compra_proveedors', function (Blueprint $table) {
        $table->id();
        $table->foreignId('proveedor_id')->constrained('proveedors')->onDelete('cascade');
        $table->foreignId('empleado_id')->constrained('empleados')->onDelete('cascade');
        $table->date('fecha');
        $table->decimal('total', 10, 2)->nullable();
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('compra_proveedors');
    }
};
