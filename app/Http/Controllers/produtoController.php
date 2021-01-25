<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\produto;



class produtoController extends Controller
{
   
    public function index()
    {
        $dados = produto::all();
        return view('fr_produtos.fr_listarProdutos', compact('dados'));
    }

   
    public function create()
    {
        return view('fr_produtos.fr_cadastroProdutos');
    }

    public function store(Request $request)
    {
        // dd($request);
         $dado = $request->only('nome_reduzido','seg_name','descricao','unidade','ean','origem','preco_compra','preco',
        'peso','estoque','garantia','ncm','cest','icms_cst','icms_perc','icms_pred','ipi_cst','ipi_perc',    
        'pis_cst', 'pis_perc','cofins_cst','cofins_perc','trib_st_perc','descnovo','cnpj_fornecedor',
        'codigo_fornec','fornecedor','marca','link','images','source_fat'); 
         produto::create($dado);
         return redirect()->route('produto.index');

    }

   
    public function show($id)
    {
        //
    }

    public function edit($codigo)
    {
        $produto = produto::find($codigo);
 
        return view('fr_produtos.fr_editarProdutos', compact('produto'));
    }

    public function update(Request $request, $codigo)
    {
         $data = produto::find($codigo);
       
         $data->update($request->all());
   
         return redirect('produto');
    }

    public function destroy($codigo)
    {
        if (!$codigo = produto::find($codigo))
        return redirect()->back();
        $codigo->delete();
        return redirect('produto');
    }
}


