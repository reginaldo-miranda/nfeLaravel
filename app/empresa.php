<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class empresa extends Model
{
    protected $primaryKey = 'codigo';
    protected $fillable = ['codigo','bairro','cep','cnpj','codempresa','codigo_pais_nfe','complemento','contato','endereco','fantasia','telefone','inscest','numero','razao','tipo_nf','codcidade','crt','margem_lucro'];
}
