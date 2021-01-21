@extends('layouts.app')

{{-- formulario de Login --}}
@section('conteudo')


 {{--<div class="row"> --}}     
 
     @include('inc.imagem')

       
   <div class="col-md-4 col-md-4 offset-4 col-sm-8 offset-2 col-xs-12"> 
      {{-- apresentacao de erros de validacao --}}

       @include('inc.erros')
       
      
         <form method="POST" action="/executaLog">

             {{ csrf_field() }}
             <div class="form-group">
               <label for="id_text_usuario">Usuario</label> 
               <input type="text" class="form-control" id="id_text_usuario" name="usuario" placeholder="usuario:">   
             </div>

              <div class="form-group">
               <label for="id_text_senha">senha</label> 
               <input type="password" class="form-control" id="id_text_senha" name="senha" placeholder="senha:">   
             </div>

             <div class="text-center">
                  <button type="submit" class="btn btn-primary">Entrar</button>
             </div>
               
             <div class="text-center margin-top-20">
               <a href="/usuario_frm_recuperar_senha">Recuperar senha</a>

             </div>  
            {{--  
             <div class="text-center">
               <a href="/usuario_frm_criar_nova_conta">Criar nova conta</a>

             </div> --}}
           
         </form>

     </div>

  {{--   </div>  --}}
 

@endsection  