@extends('layouts.app')

@section('conteudo')

<div class="col-md-4"> 
            {{-- apresentacao de erros de validacao --}}
    @section('titulopagina')
    <div>
        <h4>Cadastrar clientes</h4>
     </div>
    @endsection  

            @include('inc.erros')
            
        <form method="post" action="/cliente">

                        {{ csrf_field() }}
                  
                        <div class="container-fluid">
                            <div class="row">
                              <div class="col col md-12">
                                   <label for="text_nome">Nome</label> 
                                   <input type="text" class="form-control" id="text_nome" name="text_nome" placeholder="nome do funcionario:">   
                                    <div> 
                                      <label for="text_nome">Fantasia</label> 
                                      <input type="text" class="form-control" id="text_nome" name="text_nome" placeholder="nome do funcionario:">   
                                    </div>
                                    <div>
                                      <label for="text_nome">Endereco</label> 
                                      <input type="text" class="form-control" id="text_nome" name="text_nome" placeholder="nome do funcionario:">   
                                    </div>
                                </div>
                                <div class="w-100"></div>
                                <div class="col md-4">
                                  <label for="text_nome">Bairro</label> 
                                  <input type="text" class="form-control" id="text_nome" name="text_nome" placeholder="nome do funcionario:">   
                                </div>
                                <div class="col-sm">
                                   <label for="text_nome">Cep</label> 
                                   <input type="text" class="form-control" id="text_nome" name="text_nome" placeholder="nome do funcionario:">   
                                </div>
                            </div>
                     
                        </div>   
                        
            {{--  
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
          
                        <div class="form-group">
                            <label for="text_funcao">Funcao</label> 
                            <input type="text" class="form-control" id="text_funcao" name="text_funcao" placeholder="funcao">   
                        </div>
         
         
                        <div class="form-group">
                            <label for="text_funcao">Funcao</label> 
                            <input type="text" class="form-control" id="text_funcao" name="text_funcao" placeholder="funcao">   
                        </div>

                        <div class="form-group">
                            <label for="text_funcao">Funcao</label> 
                            <input type="text" class="form-control" id="text_funcao" name="text_funcao" placeholder="funcao">   
                        </div>

                        --}}

                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Enviar</button>
                        </div>
                                
                </form>
           
            
@endsection
