<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pedido extends Model
{
    protected $primaryKey = 'id_pedido';
    protected $fillable =['nomeCliente'];
    protected $table='pedidos';


    public function relpedido(){
        return $this->hasOne('App\pedido', 'id_pedido', 'pedido_id');
     }

     public function relpedidoitens(){
      return $this->hasMany('App\pedidoitens', 'pedido_id');
   }
 
}
