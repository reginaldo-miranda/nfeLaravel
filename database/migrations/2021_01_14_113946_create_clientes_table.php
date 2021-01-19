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
        Schema::create('cliente', function (Blueprint $table) {
            $table->increments('codigo');  // id
           // +"codigo integer NOT NULL, "
            //+"razaosocial character varying(60), "
            $table->string('razaosocial',150);
          //  +"fantasia character varying(60), "
            $table->string('fantasia',150);
            //+"pessoa character(1), "
            $table->string('pessoa',1);
            //+"cnpj character varying(18), "
            $table->string('cnpj',18);
          //  +"inscest character varying(20), "
            $table->string('inscest',20);
            //+"endereco character varying(45), "
            $table->string('endedeco',45);
            //+"numero character varying(8), "
            $table->string('numero',8);
            //+"bairro character varying(25), "
            $table->string('bairro',25);
            //+"cep integer, "
            $table->integer('cep');
            //+"codcidade integer NOT NULL, "
            $table->integer('codcidade');
            //+"uf character(2), "
            $table->string('uf',2);
            // +"telefone character varying(20), "
            $table->string('telefone',20);
            // +"contato character varying(20), "
            $table->string('contato',20);
            //+"ramalcontato character varying(15), "
            $table->string('ramalcontato',15);
            //+"email character varying(50), "
            $table->string('email',50);
            //+"consufinal character(1), "
            $table->string('consufinal',1);
            //+"diferido character(1), "
            $table->string('diferido',1);
            //+"ehtransp character(1),"
            $table->string('ehtransp',1);







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
