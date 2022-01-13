<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocumentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('pgsql')->create('documentos', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->float('tamanho', 8, 2, true);
            $table->integer('assinaturas');
            $table->string('assinatura_do_responsavel');
            $table->enum('qtd_paginas', [1, 10]);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('pgsql')->dropIfExists('documentos');
    }
}
