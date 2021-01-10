<?php
// jaoo ribeiro 47
namespace App\Http\Controllers;

use App\funcionario;
use Illuminate\Http\Request;

class FuncionarioController extends Controller
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
        return view('fr_funcionarios.fr_listarFuncionarios');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('fr_funcionarios.fr_cadastroFunc');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $funcionario = new funcionario;
        $funcionario->nome->$request->text_nome;
        $funcionario->endereco->$request->text_endereco;
        $funcionario->email->$request->text_email;
        $funcionario->salario->$request->text_salario;
        $funcionario->funcao->$request->text_funcao;
        $funcionario->save();
        return redirect('funcionario/create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\funcionario  $funcionario
     * @return \Illuminate\Http\Response
     */
    public function show(funcionario $funcionario)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\funcionario  $funcionario
     * @return \Illuminate\Http\Response
     */
    public function edit(funcionario $funcionario)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\funcionario  $funcionario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, funcionario $funcionario)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\funcionario  $funcionario
     * @return \Illuminate\Http\Response
     */
    public function destroy(funcionario $funcionario)
    {
        //
    }

    public function telacadastrarFunc()
    {
      return view('fr_funcionarios.fr_cadastroFunc');
    }
}
