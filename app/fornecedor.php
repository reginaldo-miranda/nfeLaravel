<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class fornecedor extends Model
{
    protected $primaryKey = 'codigo';
    protected $fillable =  ['razaosocial','fantasia', 'cnpj','inscest' , 'endereco' ,'numero' , 'bairro','cep' ,'codcidade','uf','telefone' ,'contato' ,'ramalcontato' ,'email'];
}
