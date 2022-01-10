<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use App\Models\Assinatura;

class CreateAssinaturasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('pgsql')->create('assinaturas', function (Blueprint $table) {
            $table->id();
            $table->integer('qnt_assinaturas');
            $table->string('assinatura_padrao');
            $table->integer('vezes_usada');
            $table->timestamps();
        });

        $this->newAssinatura(10, "fulano de tal", 50);
        $this->newAssinatura(20, "ciclano de tal", 100);
        $this->newAssinatura(30, "beltrano de tal", 200);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('assinaturas');
    }

    // Método criado apenas para poupar tempo de inserção manual no BD
    private function newAssinatura($qnt_assinaturas, $assinatura_padrao, $vezes_usada) {
        $assinatura = new Assinatura();
        $assinatura->qnt_assinaturas = $qnt_assinaturas;
        $assinatura->assinatura_padrao = $assinatura_padrao;
        $assinatura->vezes_usada = $vezes_usada;
        $assinatura->save();
    }
}
