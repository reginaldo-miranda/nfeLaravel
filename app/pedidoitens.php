<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pedidoitens extends Model
{
    protected $primaryKey = 'id_pedidoitens';

    public function relpedidoitens(){
       return $this->hasMany('App\pedidoitens', 'pedido_id');
    }

    public function relpedido(){
        return $this->hasOne('App\pedido', 'id_pedido', 'pedido_id');
     }

}

