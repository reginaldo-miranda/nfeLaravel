<?php

namespace App\Http\Controllers;

use App\cliente;
use App\pedido;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Http\Request;

class ClientesController extends Controller
{
    protected $request;
    
    public function __construct(Request $request, cliente $clientes)
    {
    $this->request = $request;
    $this->repository = $clientes;
    } 

   
    public function index()
    {    
        $dados = cliente::all();
        return  view('fr_clientes.fr_listarClientes', compact('dados'));
    }

  
    public function create()
    {
        return view('fr_clientes.fr_cadastroClientes');
      //  return view('fr_clientes.fr_Teste');
    }

    public function store(Request $request)
    {
      // dd($request);
       $data = $request->only('razaosocial','fantasia','pessoa','cnpj','inscest','telefone', 'ramalcontato','email','contato','endereco','numero','bairro','cep','codcidade','uf', 'consufinal', 'diferido','ehtransp' );
       cliente::create($data);
  
       return redirect()->route('cliente.index');

    }

   
    public function show(cliente $cliente)
    {
        //
    }

    public function edit($codigo)
    {
        $codigo = cliente::find($codigo);
       // dd($codigo);
        return view('fr_clientes.fr_editarClientes', compact('codigo'));
    }

    
    public function update(Request $request, $codigo)
    {
      $data = cliente::find($codigo);
     //  $data = $request->only('razaosocial','fantasia','pessoa','cnpj','inscest','telefone', 'ramalcontato','email','contato','endereco','numero','bairro','cep','codcidade','uf', 'consufinal', 'diferido','ehtransp' );

      $data->update($request->all());

      return redirect('cliente');
    }

    
    public function destroy($codigo)
    {
        if (!$cliente = cliente::find($codigo))
        return redirect()->back();
        $cliente->delete();
        return redirect('cliente');
    }

    public function search(Request $request){

     $dados = $this->repository->search($request->filtro);

  //   $dados = cliente::all();
   //  return  view('fr_pedidos.fr_pesquisaClientePedido',['clientes' => $dados]);

     return  view('fr_clientes.fr_listarClientes', compact('dados'));

    }

    public function searchClientePed(Request $request){

      $dados = $this->repository->searchClientePed($request->filtro);
 
   //   $dados = cliente::all();
    //  return  view('fr_pedidos.fr_pesquisaClientePedido', [
    //    'cliente' => $dados ,
     //   'filtro' =>  $dados]);
     return  view('fr_pedidos.fr_pesquisaClientePedido', compact('dados'));
 
     }
  
 }
//https://blog.schoolofnet.com/trabalhando-com-repository-no-laravel/