<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cliente extends Model
{
    protected $primaryKey = 'codigo';
    protected $fillable = ['razaosocial','fantasia','pessoa','cnpj','inscest','telefone','ramalcontato','email','contato','endereco','numero','bairro' ,'cep','codcidade','uf','consufinal', 'diferido','ehtransp'];

    public function search($filtro = null){
         
        $results = $this->where(function ($query) use($filtro){
       
            if($filtro){
                $query->where('razaosocial', 'LIKE',"%{$filtro}%");
                
            }

        })//->toSql();
        ->paginate();
        //dd($results);
        return $results;
      
    } 

    
    public function searchClientePed($filtro = null){
         
        $results = $this->where(function ($query) use($filtro){
       
            if($filtro){
                $query->where('razaosocial', 'LIKE',"%{$filtro}%");
                
            }

        })//->toSql();
        ->paginate();
        //dd($results);
       return $results;
      
      
    } 


}
