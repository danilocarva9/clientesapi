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
            $table->increments('id');
            $table->string('cli_nome');
            $table->string('cli_email'); 
            $table->string('cli_endereco');  
            $table->string('cli_telefone');   
            $table->integer('cid_id')->unsigned();
            $table->foreign('cid_id')->references('id')->on('cidades');
            $table->integer('plan_id')->unsigned();
            $table->foreign('plan_id')->references('id')->on('planos');
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
