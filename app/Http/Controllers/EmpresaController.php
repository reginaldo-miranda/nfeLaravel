<?php

namespace App\Http\Controllers;

use App\empresa;
use Illuminate\Http\Request;

class EmpresaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $dados = empresa::all();
        return  view('fr_empresa.fr_listarEmpresa', compact('dados'));
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('fr_empresa.fr_cadastroEmpresa');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
     
     $dados = $request->only('bairro','cep','cnpj','codempresa','codigo_pais_nfe','complemento','contato','endereco','fantasia','telefone','inscest','numero','razao','tipo_nf','codcidade','crt','margem_lucro');

     
     empresa::create($dados);
     return redirect()->route('empresa.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\empresa  $empresa
     * @return \Illuminate\Http\Response
     */
    public function show(empresa $empresa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\empresa  $empresa
     * @return \Illuminate\Http\Response
     */
    public function edit($empresa)
    {
        $codigoe = empresa::find($empresa);
        // dd($codigo);
         return view('fr_empresa.fr_editarEmpresa', compact('codigoe'));

       }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\empresa  $empresa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $codigo)
    {   
         $data = empresa::find($codigo);
        
         $data->update($request->all());
   
         return redirect('empresa');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\empresa  $empresa
     * @return \Illuminate\Http\Response
     */
    public function destroy(empresa $empresa)
    {
        //
    }
}
