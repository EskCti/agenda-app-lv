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
        Schema::create('contatos', function (Blueprint $table) {
            $table->id();
            $table->string("nome", 80);
            $table->string("cep", 10)->nullable();
            $table->string("logradouro", 100)->nullable();
            $table->string("uf", 2)->nullable();
            $table->string("numero", 15)->nullable();
            $table->string("complemento", 80)->nullable();
            $table->string("cidade", 100)->nullable();
            $table->string("bairro", 100)->nullable();
            $table->string("celular", 20)->nullable();
            $table->string("sexo", 10)->nullable();
            $table->date("nascimento")->nullable();
            $table->string("cpf", 14)->nullable();
            $table->string("email", 100)->nullable();
            $table->text("observacao")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contatos');
    }
};
