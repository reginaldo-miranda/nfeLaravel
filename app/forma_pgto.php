<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class forma_pgto extends Model
{
    protected $primaryKey = 'codigo';
    protected $table='forma_pgtos';
    protected $fillable = ['descricao','qtde_parcelas','dias_inicial','dias_intervalo'];

    
/*
    $table->increments('codigo');
    $table->char(20)('descricao');
    $table->integer('qtde_parcelas');
    $table->integer('dias_inicial');
    $table->integer('dias_intervalo');
    $table->timestamps();
*/
}
