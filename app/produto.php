<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class produto extends Model
{
    
    protected $primaryKey = 'codigo';
  //  protected $fillable = ['razaosocial','fantasia','pessoa','cnpj','inscest','telefone','ramalcontato','email','contato','endereco','numero','bairro' ,'cep','codcidade','uf','consufinal', 'diferido','ehtransp'];
    protected $fillable = ['nome_reduzido','seg_name','descricao','unidade','ean','origem','preco_compra','preco',
        'peso','estoque','garantia','ncm','cest','icms_cst','icms_perc','icms_pred','ipi_cst','ipi_perc',    
        'pis_cst', 'pis_perc','cofins_cst','cofins_perc','trib_st_perc','descnovo','cnpj_fornecedor',
        'codigo_fornec','fornecedor','marca','link','images','source_fat']; 


}
