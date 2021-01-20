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

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {    
        $dados = cliente::all();
        return  view('fr_clientes.fr_listarClientes', compact('dados'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('fr_clientes.fr_cadastroClientes');
      //  return view('fr_clientes.fr_Teste');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Display the specified resource.
     *
     * @param  \App\cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function show(cliente $cliente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function edit($codigo)
    {
        $codigo = cliente::find($codigo);
 
        return view('fr_clientes.fr_editarClientes', compact('codigo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, cliente $cliente)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function destroy(cliente $cliente)
    {
        //
    }
}
