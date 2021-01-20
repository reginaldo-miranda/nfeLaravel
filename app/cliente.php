<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cliente extends Model
{
    protected $primaryKey = 'codigo';
    protected $fillable = ['razaosocial','fantasia','pessoa','cnpj','inscest','telefone','ramalcontato','email','contato','endereco','numero','bairro' ,'cep','codcidade','uf','consufinal', 'diferido','ehtransp'];
}
