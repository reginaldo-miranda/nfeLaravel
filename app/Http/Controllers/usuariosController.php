<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\usuarios;


class usuariosController extends Controller
{

  protected $request;
  public function __construct(Request $request)
  {
    $this->request = $request;
  }
   
    public function index()
    {
       $dados = usuarios::all();
       return view('fr_usuarios.fr_listarUsuarios', compact('dados'));
    }

       public function create()
    {
        
        return view('/fr_usuarios.fr_cadastroUsuarios');
    }

    public function store(Request $request) // joao ribeiro 75 13:25 mim
    {
      $this->validate($request,[
        'nome' => 'required|between:2,40',
        'email' => 'required|email',
        'senha' => 'required|between:6,15',
        'senhaRepetida' =>  'required|same:senha'

      ]);

      $dados = usuarios::where('email','-',$request->email)->get();

      if($dados->count()!=0){

          $erros_bd =['ja existe esse email'];

          return view('/fr_cadastroUsuarios');
      }

       $dadosNovos = new usuarios;

       $dadosNovos->usuario = $request->nome;
       $dadosNovos->email   = $request->email;
       $dadosNovos->senha   = Hash::make($request->senha);
       $dadosNovos->save();
      
       return redirect('usuario');
    }

    public function show($id)
    {
        return "usuario numero: {$id}";
    }

    public function edit($id_usuarios)
    {
      $usuarios = usuarios::find($id_usuarios);
      //dd($usuarios);
      return view('fr_usuarios.fr_editarUsuarios', compact('usuarios'));
    }
    public function update(Request $request, $id_usuarios)
    {
        $usuario = usuarios::find($id_usuarios);

        $usuario->usuario = $request->nome;
        $usuario->email = $request->email;
        $usuario->senha = Hash::make($request->senha);
        $usuario->save();
        return redirect('usuario');

    }
    public function destroy($id_usuarios)
    {
      if (!$usuarios = usuarios::find($id_usuarios))
      return redirect()->back();
      $usuarios->delete();
      return redirect('usuario');
    }
     public function execurtarLogin(Request $request){
          /* 1 verifacar das preenchidos validacao
           2 procurar na bd (enlouquente orm)
           3 comparar os dados digitado com bd (haching)
           4 passou os dados acima criar sessao usario   
           5  video aula joao ribeiro 67
           // 1 validacao
        */
       // $senha = 'master';
       // $request->text_senha = $senha;
        $this->validate($request, [
          'usuario'=> 'required',
          'senha'  => 'required'
          
         ]);
               
        if($request->usuario == "admin" && $request->senha == "master" ){
          return view('fr_admin');
        }

          // verificar se usuario existe
          $usuario = usuarios::where('usuario',$request->usuario)->first();
             // if(count($usuario)==0){
             if($usuario->count()==0){
                $erros_bd = ['essa conta de usuario nao existe'];
                return view('fr_logim', compact('erros_bd'));
             }
              //  $usuario = usuarios::where('usuario',$request->text_senha)->get();
              //  verificar a senha
            if(!Hash::check($request->senha, $usuario->senha)){ // joao ribeiro 76
              $erros_bd = ['essa senha de usuario nao existe'];
              return view('fr_logim', compact('erros_bd'));

            }
            /* Session::put('login','sim');
              Session::put('usuario', $usuario->usuario);
            */

            return  view('fr_admin');
            
        }

        public function telaLogin(){
              return view('fr_logim');
        }

}
