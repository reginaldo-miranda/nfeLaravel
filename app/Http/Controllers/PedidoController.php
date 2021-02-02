<?php

namespace App\Http\Controllers;
use App\Http\Controllers\ClientesController;


use App\pedido;
use App\cliente;
use Illuminate\Http\Request;

class PedidoController extends Controller
{

    protected $request;
    
    public function __construct(Request $request, cliente $clientes, pedido $pedido)
    {
    $this->request = $request;
    $this->repository = $clientes;
    $this->repository = $pedido;
    } 

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return 'aqui na index';

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
        // 
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


    public function escolherCliente(Request $request){
        // dd($request);
        $codigo= cliente::find($request);
        dd($codigo);
        
         return view('fr_pedidos.fr_unicoCEPedido', compact('codigo'));
    }

    public function searchClientePed(Request $request){

        $dados = $this->repository->searchClientePed($request->filtro);
   
     //   $dados = cliente::all();
        //return  view('fr_pedidos.fr_pesquisaClientePedido',['clientes' => $dados]);
        return  view('fr_pedidos.fr_pesquisaClientePedido', compact('dados'));
        


   
      
   
       }
}
