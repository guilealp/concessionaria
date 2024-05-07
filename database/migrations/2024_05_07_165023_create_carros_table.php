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
        Schema::create('carros', function (Blueprint $table) {
            $table->id();
            $table->string('modelo',80)->nullable(false);
            $table->string('ano',4)->nullable(false);
            $table->string('marca')->nullable(false);
            $table->string('cor')->nullable(false);
            $table->string('peso')->nullable(false);
            $table->string('potencia')->nullable(false);
            $table->string('descricao')->nullable(false);
            $table->decimal('preco')->decimal()->nullable(false);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('carros');
    }
};
