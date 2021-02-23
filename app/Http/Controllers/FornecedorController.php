<?php

namespace App\Http\Controllers;

use App\fornecedor;
use Illuminate\Http\Request;

class FornecedorController extends Controller
{
  
    public function index()
    {
        $dados = fornecedor::all();
        return  view('fr_fornecedores.fr_listarFornecedores', compact('dados'));
    }

 
    public function create()
    {
        return view('fr_fornecedores.fr_cadastroFornecedor');
    }

    
    public function store(Request $request)
    {

        $data = $request->only('razaosocial','fantasia', 'cnpj','inscest' , 'endereco' ,'numero' , 'bairro','cep' ,'codcidade','uf','telefone' ,'contato' ,'ramalcontato' ,'email');
        fornecedor::create($data);
        return redirect()->route('fornecedor.index');
  
    }

    
    public function show(fornecedor $fornecedor)
    {
        //
    }

    public function edit($codigo)
    {
        $codigo = fornecedor::find($codigo);
        return view('fr_fornecedores.fr_editarFornecedores', compact('codigo'));
    }

    
    public function update(Request $request, $codigo)
    {
        $data = fornecedor::find($codigo);
          
         $data->update($request->all());
   
         return redirect('fornecedor');
    }

    
    public function destroy($fornecedor)
    {
        if (!$fornecedor = fornecedor::find($fornecedor))
        return redirect()->back();
        $fornecedor->delete();
        return redirect('fornecedor');
    }
}
