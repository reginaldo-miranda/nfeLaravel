<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\produto;



class produtoController extends Controller
{
   
    public function index()
    {
        //
    }

   
    public function create()
    {
        return view('fr_produtos.fr_cadastroProdutos');
    }

    public function store(Request $request)
    {
        
         $dado = $request->only('nome_reduzido','seg_name','descricao','unidade','ean','origem','preco_compra','preco',
        'peso','estoque','garantia','ncm','cest','icms_cst','icms_perc','icms_pred','ipi_cst','ipi_perc',    
        'pis_cst', 'pis_perc','cofins_cst','cofins_perc','trib_st_perc','descnovo','cnpj_fornecedor',
        'codigo_fornec','fornecedor','marca','link','images','source_fat'); 
         produto::create($dado);

    }

   
    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}


