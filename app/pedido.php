<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pedido extends Model
{
    protected $primaryKey = 'id_pedido';


    public function searchClientePed($filtro = null){
         
        $results = $this->where(function ($query) use($filtro){
       
            if($filtro){
                $query->where('nomeCliente', 'LIKE',"%{$filtro}%");
                
            }

        })//->toSql();
        ->paginate();
        //dd($results);
        return $results;
      
    } 




}
