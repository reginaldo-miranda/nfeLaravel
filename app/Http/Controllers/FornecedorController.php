<?php

namespace App\Http\Controllers;

use App\fornecedor;
use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dados = fornecedor::all();
        return  view('fr_fornecedores.fr_listarFornecedores', compact('dados'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('fr_fornecedores.fr_cadastroFornecedor');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $data = $request->only('razaosocial','fantasia', 'cnpj','inscest' , 'endereco' ,'numero' , 'bairro','cep' ,'codcidade','uf','telefone' ,'contato' ,'ramalcontato' ,'email');
        fornecedor::create($data);
        return redirect()->route('fornecedor.index');
  
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\fornecedor  $fornecedor
     * @return \Illuminate\Http\Response
     */
    public function show(fornecedor $fornecedor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\fornecedor  $fornecedor
     * @return \Illuminate\Http\Response
     */
    public function edit($codigo)
    {
        $codigo = fornecedor::find($codigo);
        return view('fr_fornecedores.fr_editarFornecedores', compact('codigo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\fornecedor  $fornecedor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $codigo)
    {
        $data = fornecedor::find($codigo);
          
         $data->update($request->all());
   
         return redirect('fornecedor');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\fornecedor  $fornecedor
     * @return \Illuminate\Http\Response
     */
    public function destroy($fornecedor)
    {
        if (!$fornecedor = fornecedor::find($fornecedor))
        return redirect()->back();
        $fornecedor->delete();
        return redirect('fornecedor');
    }
}
