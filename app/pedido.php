<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pedido extends Model
{
    protected $primaryKey = 'id_pedido';
    protected $fillable =['nomeCliente'];
    protected $table='pedidos';


    public function pedidoitens()
    {
        return $this->hasMany('id_pedidoitens');
    }
}
