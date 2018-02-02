<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->increments('cliente_id');
            $table->string('cliente_nome');
            $table->string('cliente_email'); 
            $table->string('cliente_endereco');  
            $table->string('cliente_telefone');   
            $table->integer('cidade_id')->unsigned();
            $table->foreign('cidade_id')->references('cidade_id')->on('cidades');
            $table->integer('plano_id')->unsigned();
            $table->foreign('plano_id')->references('plano_id')->on('planos');
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
        Schema::dropIfExists('clientes');
    }
}
