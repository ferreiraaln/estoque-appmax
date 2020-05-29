<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProdutosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produtos', function (Blueprint $table) {

            $table->increments('produtos_id');
            $table->integer('states_id')->unsigned();// Id da tabela status
            $table->foreign('states_id')->references('states_id')->on('states'); 
            $table->string('sku', 20)->nullable()->unique();
            $table->string('nome', 50)->nullable();
            $table->string('quantidade')->nullable();
            $table->string('descricao', 500)->nullable(); 
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
        Schema::dropIfExists('produtos');
    }
}
