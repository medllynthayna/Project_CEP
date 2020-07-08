<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLocacaoImovelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('locacao_imovels', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('cep' );
            $table->string('rua', 100);
            $table->integer('numero');
            $table->string('bairro', 100);
            $table->string('cidade', 100);
            $table->string('estado', 2);
           
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('locacao_imovels');
    }
}
