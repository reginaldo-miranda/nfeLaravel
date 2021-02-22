<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFormaPgtosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('forma_pgtos', function (Blueprint $table) {
            $table->increments('codigo');
            $table->char(20)('descricao');
            $table->integer('qtde_parcelas');
            $table->integer('dias_inicial');
            $table->integer('dias_intervalo');
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
        Schema::dropIfExists('forma_pgtos');
    }
}


