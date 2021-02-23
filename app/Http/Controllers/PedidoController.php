<?php

namespace App\Http\Controllers;
use App\Http\Controllers\ClientesController;
use Illuminate\Pagination\Paginator;
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
    private $totalpagina = 4;
    
    public function __construct(Request $request, cliente $clientes, pedido $pedido, pedidoitens $objpedidoitens)
    {
      
    $this->request    = $request;
    $this->repository = $clientes;
    $this->repository = $pedido;
    $this->repository = $objpedidoitens;
    $this->objpedidoitens = new pedidoitens();
    $this->objpedido      = new pedido();
   

    } 

   
    public function index()
    {
     
      // dd($this->objpedidoitens->find(1)->relpedido);
       $pedido = $this->objpedido->paginate($this->totalpagina);
     //  dd($pedido);

       // $dados = pedido::all();
       // dd($dados);
        //return view('fr_pedidos.fr_listarPedidos' , compact('dados'));
       return view('fr_vendas.fr_inicio', compact('pedido'));
       

    }

    
    public function create()
    {
        return view('fr_pedidos.fr_CadastrarPedido');
    }

  
    public function store(Request $request)
    {
        
        
        $dados=$request->only('nomeCliente');
        pedido::create($dados);

        $pedido = $this->objpedido->all();
        return view('fr_vendas.fr_inicio',compact('pedido'));
    }

    
    public function show($pedido)
    {
        return 'numero show';
      }

    
    public function edit($pedido)
    {
        return 'aqui editar';
    }

    
    public function update(Request $request, pedido $pedido)
    {
        //
    }

    
    public function destroy($pedido)
    {
       return "desletar";
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
       
  
}
