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
        Schema::create('doadores', function (Blueprint $table) {
            $table->id();
            $table->string("nome");
            $table->string("email");
            $table->string("cpf");
            $table->string("telefone");
            $table->date("dt_nascimento");
            $table->date("dt_cadastro");
            $table->enum("intervalo_doacao",["Único","Bimestral","Semestral","Anual"]);
            $table->decimal("vl_doacao", 12,2);
            $table->enum("forma_pagamento",["Débito","Crédito"]);
            $table->string("endereco");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('doadores');
    }
};
