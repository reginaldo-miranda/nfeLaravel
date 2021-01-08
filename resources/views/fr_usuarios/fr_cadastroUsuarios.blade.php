@extends('layouts.app')

@section('conteudo')

<div class="col-md-4">  

    @section('titulopagina')
     <div>
        <h4>Cadastrar Uusarios</h4>
     </div>
    @endsection  
          
      {{-- apresentacao de erros de validacao --}}

       @include('inc.erros')
      
         <form method="POST" action="/">

                {{ csrf_field() }}
                
                <div class="form-group">
                     <label for="text_nome">Nome</label> 
                     <input type="text" class="form-control" id="text_nome" name="text_nome" placeholder="nome do funcionario:">   
                </div>

              
                <div class="form-group">
                    <label for="text_email">Email</label> 
                    <input type="text" class="form-control" id="text_email" name="text_email" placeholder="email:">   
                </div>

                <div class="form-group">
                    <label for="id_text_senha">senha</label> 
                    <input type="password" class="form-control" id="id_text_senha" name="text_senha" placeholder="senha:">   
                </div>
     

                <div class="text-center">
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </div>
                        
         </form>

    </div>

@endsection












































