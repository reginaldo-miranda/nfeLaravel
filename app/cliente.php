<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cliente extends Model
{
    protected $primaryKey = 'codigo';
    protected $fillable = ['razaosocial','fantasia','pessoa','cnpj','inscest','endereco','numero','bairro','cep','codcidade','uf','telefone' ,'contato','ramalcontato','email','consufinal', 'diferido','ehtransp'];
}
