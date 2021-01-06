@extends('layouts.app')

@section('conteudo')

<style>

 input {
   height: 25px;
 }

 #footer{
   padding-top: 5px;
   width: 89%;
   margin-left:70px;

 }

 .container{
   background: greenyellow;
   height: 620px;
 }
 
</style>
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
                            <label for="text_endereco">Endereco</label> 
                            <input type="text" class="form-control" id="text_endereco" name="text_endereco" placeholder="endereco:">   
                        </div>

                        <div class="form-group">
                            <label for="text_email">Email</label> 
                            <input type="text" class="form-control" id="text_email" name="text_email" placeholder="email:">   
                        </div>

                        <div class="form-group">
                            <label for="text_salario">Salario</label> 
                            <input type="text" class="form-control" id="text_salario" name="text_salario" placeholder="salario:">   
                        </div>

                        <div class="form-group">
                            <label for="text_funcao">Funcao</label> 
                            <input type="text" class="form-control" id="text_funcao" name="text_funcao" placeholder="funcao">   
                        </div>

                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Enviar</button>
                        </div>
                                
                </form>
                   
            </div>  
           
            
@endsection
