<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use PhpParser\Node\Expr\Cast\Double;

class CreatePedidoitensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedidoitens', function (Blueprint $table) {
            $table->increments('id_pedidoitens');
            $table->integer('id_pedido');
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
        Schema::dropIfExists('pedidoitens');
    }
}
