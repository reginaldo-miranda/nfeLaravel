<?php

namespace App\Http\Controllers;
use App\Http\Controllers\ClientesController;

use App\produto;
use App\pedido;
use App\pedidoitens;
use App\cliente;
use Illuminate\Http\Request;

class PedidoController extends Controller
{

    protected $request;
    private $objpedidoitens;
    private $objpedido;
    
    public function __construct(Request $request, cliente $clientes, pedido $pedido, pedidoitens $objpedidoitens)
    {
      
    $this->request    = $request;
    $this->repository = $clientes;
    $this->repository = $pedido;
    $this->repository = $objpedidoitens;
    $this->objpedidoitens = new pedidoitens();
    $this->objpedido      = new pedido();
   

    } 

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      // dd($this->objpedidoitens->find(1)->relpedido);
       $pedido = $this->objpedido->all();
     //  dd($pedido);

       // $dados = pedido::all();
       // dd($dados);
        //return view('fr_pedidos.fr_listarPedidos' , compact('dados'));
       return view('fr_vendas.fr_inicio', compact('pedido'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('fr_pedidos.fr_CadastrarPedido');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
     //   dd($request);        
        $data=$request->only('nomeCliente');
        pedido::create($data);
        return view('fr_pedidos.fr_listarPedidos');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\pedido  $pedido
     * @return \Illuminate\Http\Response
     */
    public function show(pedido $pedido)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\pedido  $pedido
     * @return \Illuminate\Http\Response
     */
    public function edit(pedido $pedido)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\pedido  $pedido
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, pedido $pedido)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\pedido  $pedido
     * @return \Illuminate\Http\Response
     */
    public function destroy(pedido $pedido)
    {
        //
    }

    public function PCliente(){
  
         $dados = cliente::all();
         return view('fr_pedidos.fr_pesquisaClientePedido', compact('dados'));
    }


    public function escolherCliente(Request $request, $codigo){

       
        // dd($codigo);
         $dados = cliente::find($codigo);
        // dd($dados);
        // $dados = cliente::find($request);
        // $dados = $request->all();
        // $dados = $request->input('razaosocial');
        // $dados = $request->input('products.0.name');
        // $dados = $request->input();
        // $dados = $request->query($codigo);
        // $dados = $request->input('user.name');
        // dd($dados);
            
        return view('fr_pedidos.fr_cadastrarPedido', compact('dados'));
      // return view('fr_pedidos.fr_unicoCEPedido', compact('dados'));
       
    }

    public function escolherproduto(Request $request, $codigo){
      
        $dadoprod = produto::find($codigo);
        //dd($dadoprod);

        // $arrayProd[]=$dadoprod;
        

       return view('fr_pedidos.fr_cadastrarPedido', compact('dadoprod'));
       // return view('fr_pedidos.fr_tabelaProd', compact('dadoprod'));
    }
        
    public function prencherTabela(){

        return view('fr_pedidos.fr_cadastrarPedido');
    }

  
}
