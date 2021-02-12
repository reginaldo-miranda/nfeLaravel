<?php

namespace App\Http\Controllers;

use App\pedidoitens;
use App\pedido;
use Illuminate\Http\Request;

class PedidoitensController extends Controller
{
    
    private $objpedido;
    private $objpedidoitens;

    public function __construct()
    {
        
        $this->objpedido = new pedido();
        $this->objpedidoitens = new pedidoitens();

    }



    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\pedidoitens  $pedidoitens
     * @return \Illuminate\Http\Response
     */
    public function show(pedidoitens $pedidoitens)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\pedidoitens  $pedidoitens
     * @return \Illuminate\Http\Response
     */
    public function edit(pedidoitens $pedidoitens)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\pedidoitens  $pedidoitens
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, pedidoitens $pedidoitens)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\pedidoitens  $pedidoitens
     * @return \Illuminate\Http\Response
     */
    public function destroy(pedidoitens $pedidoitens)
    {
        //
    }
    
    public function prencherTabela(request $requst, $id){


        
    // dd($this->objpedido->find(1)->relpedidoitens);

      $dados = $this->objpedido->find($id)->relpedidoitens;
         
     //  $dados = pedidoitens::where('pedido_id == $id');

      // dd($dados);
       // echo ($dados->id_pedido);

        return view('fr_vendas.fr_listaProdutosPedido',compact('dados'));
    }

}
