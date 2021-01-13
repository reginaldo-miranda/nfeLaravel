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
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $dados = usuarios::all();
       return view('fr_usuarios.fr_listarUsuarios', compact('dados'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('/fr_usuarios.fr_cadastroUsuarios');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) // joao ribeiro 75 13:25 mim
    {
      $this->validate($request,[
        'text_nome' => 'required|between:2,40',
        'text_email' => 'required|email',
        'text_senha' => 'required|between:6,15',
        'text_senhaRepetida' =>  'required|same:text_senha'

      ]);

      $dados = usuarios::where('email','-',$request->text_email)->get();

      if($dados->count()!=0){

          $erros_bd =['ja existe esse email'];

          return view('/fr_cadastroUsuarios');
      }

      $dadosNovos = new usuarios;

      $dadosNovos->usuario = $request->text_nome;
      $dadosNovos->email = $request->text_email;
      $dadosNovos->senha = Hash::make($request->text_senha);
      $dadosNovos->save();
      
       return redirect('usuario');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return "usuario numero: {$id}";
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id_usuarios)
    {
      $usuarios = usuarios::find($id_usuarios);
 
      return view('fr_usuarios.fr_editarUsuarios', compact('usuarios'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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


           5             video aula joao ribeiro 67
        
        // 1 validacao
        */
        $senha = 'master';
        $request->text_senha = $senha;
        $this->validate($request, [
          'text_usuario'=> 'required',
          'text_senha' // => 'required'
          ]);
                
        if($request->text_usuario == "admin" && $request->text_senha == "master" ){
          return view('fr_admin');
        }

          // verificar se usuario existe
          $usuario = usuarios::where('usuario',$request->text_usuario)->get();
             // if(count($usuario)==0){
             if($usuario->count()==0){
                $erros_bd = ['essa conta de usuario nao existe'];
                return view('fr_logim', compact('erros_bd'));
             }
          $usuario = usuarios::where('usuario',$request->text_usuario)->first();
          //  verificar a senha
            if(!Hash::check($request->text_senha, $usuario->senha)){
              $erros_bd = ['essa senha de usuario nao existe'];
              return view('fr_logim', compact('erros_bd'));

            }
           /* Session::put('login','sim');
              Session::put('usuario', $usuario->usuario);
            */

            return redirect('/');
           // return 'estou aqui';
        }

        public function telaLogin(){
              return view('fr_logim');
        }

}
