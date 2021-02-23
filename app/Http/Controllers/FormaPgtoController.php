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

    public function create()
    {
        return view('fr_formapgto.fr_cadastroFormaPagamento');
    }

    public function store(Request $request)
    {
       return 'estou na store';
    }

    
    public function show(forma_pgto $forma_pgto)
    {
        //
    }

 
    public function edit($codigo)
    {
        $dadospgto = forma_pgto::find($codigo);
       //dd($dadospgto);
         return view('fr_formaPgto.fr_editarFormaPgto', compact('dadospgto'));
    }

    
    public function update(Request $request, $codigo)
    {
        $dados = forma_pgto::find($codigo);
       // dd($dados);
        $dados->update($request->all());
        

        return redirect('formapgto');
    }

   
    public function destroy(forma_pgto $codigo)
    {
        if (!$form = forma_pgto::find($codigo))
        return redirect()->back();
        $form->delete();
        return redirect('formapgto');
    }
}
