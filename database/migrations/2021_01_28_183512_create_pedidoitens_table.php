<?php

use App\pedido;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use PhpParser\Node\Expr\Cast\Double;
use \Illuminate\Support\Fluent;

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
          $table->integer('pedido_id')->unsigned();

            $table->double('desconto');
            $table->integer('codigoProduto');
            $table->double('qde',10,2);
            $table->double('precoUnit',10,2);
            $table->double('precoTotal', 10,2);
          
        //  $table->foreign('pedido_id')->references('id_pedido')->on('pedido')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
      
     }
//}

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
