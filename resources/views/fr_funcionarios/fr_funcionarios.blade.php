@extends('layouts.app')

@section('conteudo')

<style>
 input {
   height: 25px;
 }

</style>
<div class="row"> 
       
    <div class="col-md-4">
      {{-- apresentacao de erros de validacao --}}

       @include('inc.erros')
      
         <form method="POST" action="/">

                {{ csrf_field() }}
                
                <div class="form-group">
                     <label for="text_nome">Nome</label> 
                     <input type="text" class="form-control" id="text_nome" name="text_nome" placeholder="nome do funcionario:">   
                </div>

                <div class="form-group">
                    <label for="text_endereco">Nome</label> 
                    <input type="text" class="form-control" id="text_endereco" name="text_endereco" placeholder="endereco:">   
                </div>

                <div class="form-group">
                    <label for="text_email">Email</label> 
                    <input type="text" class="form-control" id="text_email" name="text_email" placeholder="email:">   
                </div>

                <div class="form-group">
                    <label for="id_text_senha">senha</label> 
                    <input type="password" class="form-control" id="id_text_senha" name="text_senha" placeholder="senha:">   
                </div>

                <div class="form-group">
                    <label for="text_funcao">Funcao</label> 
                    <input type="text" class="form-control" id="text_funcao" name="text_funcao" placeholder="funcao">   
                </div>

                <div class="text-center">
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </div>
                        
         </form>

      <div>

    </div>

@endsection
