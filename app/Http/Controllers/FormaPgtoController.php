<?php

namespace App\Http\Controllers;

use App\forma_pgto;
use Illuminate\Http\Request;

class FormaPgtoController extends Controller
{
    protected $request;
    
    public function __construct(Request $request)
  {
    $this->request = $request;
  }
   
    public function index()
    {
        $dadospgto = forma_pgto::all();
       //dd($dadospgto);
        return view('fr_formapgto.fr_listaFormaPgto', compact('dadospgto'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('fr_formapgto.fr_cadastroFormaPagamento');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       return 'estou na store';
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\forma_pgto  $forma_pgto
     * @return \Illuminate\Http\Response
     */
    public function show(forma_pgto $forma_pgto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\forma_pgto  $forma_pgto
     * @return \Illuminate\Http\Response
     */
    public function edit($codigo)
    {
        $dadospgto = forma_pgto::find($codigo);
       //dd($dadospgto);
         return view('fr_formaPgto.fr_editarFormaPgto', compact('dadospgto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\forma_pgto  $forma_pgto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $codigo)
    {
        $dados = forma_pgto::find($codigo);
       // dd($dados);
        $dados->update($request->all());
        

        return redirect('formapgto');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\forma_pgto  $forma_pgto
     * @return \Illuminate\Http\Response
     */
    public function destroy(forma_pgto $forma_pgto)
    {
        //
    }
}
