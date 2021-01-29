<?php

namespace App\Http\Controllers;

use App\cliente;
use Illuminate\Http\Request;

class ClientesController extends Controller
{
    protected $request;
    
    public function __construct(Request $request)
    {
    $this->request = $request;
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
      /*
       $cliente = new cliente;
       $cliente->razaosocial  = $request->text_razaosocial;
       $cliente->fantasia     = $request->text_fantasia;
       $cliente->pessoa       = $request->text_pessoa;
       $cliente->cnpj         = $request->text_cnpj;
       $cliente->inscest      = $request->text_inscricao;
       $cliente->endereco     = $request->text_endereco;
       $cliente->numero       = $request->text_numero;
       $cliente->bairro       = $request->text_bairoo;
       $cliente->cep          = $request->text_cep;
       $cliente->codcidade    = $request->text_codcidade;
       $cliente->uf           = $request->text_uf;
       $cliente->telefone     = $request->text_telefone;
       $cliente->contato      = $request->text_contato;
       $cliente->ramalcontato = $request->text_ramalcontato;
       $cliente->email        = $request->text_email;
       $cliente->consufinal   = $request->text_consufinal;
       $cliente->diferido     = $request->text_diferido;
       $cliente->ehtransp     = $request->text_ehtransp;
       $cliente->save(); */
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

        dd($request->all());
    }
}
