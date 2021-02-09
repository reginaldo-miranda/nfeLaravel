<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePvendaitensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pvendaitens', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('pvitens')->unsigned();
            $table->foreign('pvitens')->references('id')->on('pvendas')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('codigoCliente');
            $table->integer('codigoProduto');
            $table->double('qde',10,2);
            $table->double('precoUnit',10,2);
            $table->double('precoTotal', 10,2);
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
        Schema::dropIfExists('pvendaitens');
    }
}
