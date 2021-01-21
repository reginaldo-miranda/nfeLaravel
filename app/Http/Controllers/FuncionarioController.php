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
   
    public function index()
    {
        $dados = funcionario::all();
       return view('fr_funcionarios.fr_listarFuncionarios', compact('dados'));
       
    }

   
    public function create()
    {
      return view('fr_funcionarios.fr_cadastroFunc');
    }

   
    public function store(Request $request)
    {
      /*
       $dados = ['
         $request->all();
       '];*/
      
        $funcionario = new funcionario;

        $funcionario->nome     = $request->text_nome;
        $funcionario->endereco = $request->text_endereco;
        $funcionario->email    = $request->text_email;
        $funcionario->salario  = $request->text_salario;
        $funcionario->funcao   = $request->text_funcao;
        $funcionario->save();
        return redirect('funcionario/create'); 
   
    }

   
    public function show(funcionario $funcionario)
    {
        //
    }

    public function edit($id_funcionarios)
     {   

        $funcionario = funcionario::find($id_funcionarios);
 
        return view('fr_funcionarios.fr_editarFuncionarios', compact('funcionario'));
    }

    public function update(Request $request, $id_funcionarios)
    {
      $funcionario = funcionario::find($id_funcionarios);

      
      $funcionario->nome     = $request->text_nome;
      $funcionario->endereco = $request->text_endereco;
      $funcionario->email    = $request->text_email;
      $funcionario->salario  = $request->text_salario;
      $funcionario->funcao   = $request->text_funcao;
      $funcionario->save();

      return redirect('funcionario');
    }

    public function destroy($id_funcionarios)
    {
        
        if (!$funcionario = funcionario::find($id_funcionarios))
          return redirect()->back();
          $funcionario->delete();
          return redirect('funcionario');
    }

    public function telacadastrarFunc()
    {
      return view('fr_funcionarios.fr_cadastroFunc');
    }
}
