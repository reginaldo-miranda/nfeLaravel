<?php

namespace App\Http\Controllers;


use App\pedido;
use App\pedidoitens;
use App\produto;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PedidoitensController extends Controller
{
    
    private $objpedido;
    protected $objpedidoitens;

    public function __construct()
    {
        
        $this->objpedido      = new pedido();
        $this->objpedidoitens = new pedidoitens();
        $this->objprodutos    = new produto();

    }

    

    public function index()
    {
            $pedido = pedidoitens::all();
            return 'aqui na index'; //view('fr_vendas.fr_inicio', compact('pedido'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($codigo)
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
            
            $dados = $request->only('pedido_id', 'codigoProduto','qde', 'desconto', 'precoUnit','precoTotal');
            pedidoitens::create($dados);

            return 'gravado';//view('fr_pedidos.fr_incluirItensPedido');
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
    public function edit($codigo)
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

   // dd($this->objpedido->find($id)->relpedidoitens);

      $dados    = $this->objpedido->find($id)->relpedidoitens;
      $dadosped = $this->objpedido->find($id);
      $dadosProd = $this->objprodutos->get();

      
      dd($dadosProd);
      
         
    
        return view('fr_vendas.fr_listaProdutosPedido',compact('dados','dadosped','dadosProd'));
    }

    public function lancarItens($codigo,$dadosidped){
        $dadosProd = produto::find($codigo);
        $dadoidpedido = $dadosidped;


       // dd($codigo);
        //return view('fr_produtos.fr_listarProdutos', compact('dados'));

        return view('fr_pedidos.fr_incluirItensPedido', compact('dadosProd','dadoidpedido'));
       // return 'aqui';
    }
 //   SELECT PI.* , P.NOME_REDUZIDO FROM PEDIDOITENS PI INNER JOIN PRODUTOS P ON (PI.codigoProduto = p.codigo)
    // WHERE pedido_id = 1 
}

