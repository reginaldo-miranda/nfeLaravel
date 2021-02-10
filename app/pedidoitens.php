<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pedidoitens extends Model
{
    protected $primaryKey = 'id_pedidoitens';

    public function relpedidoitens(){
       return $this->hasMany('App\pedidoitens', 'pvitens');
    }
}
