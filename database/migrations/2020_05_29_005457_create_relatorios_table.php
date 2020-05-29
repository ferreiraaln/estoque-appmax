<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRelatoriosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('relatorios', function (Blueprint $table) {
            $table->increments('relatorio_id');
            $table->integer('produto_id')->unsigned();// Id da tabela status
            $table->foreign('produto_id')->references('produtos_id')->on('produtos');
            $table->integer('states_id')->unsigned();// Id da tabela status
            $table->foreign('states_id')->references('states_id')->on('states');
            $table->integer('quantidade')->nullable();
            $table->string('login', 50)->nullable();

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
        Schema::dropIfExists('relatorios');
    }
}
