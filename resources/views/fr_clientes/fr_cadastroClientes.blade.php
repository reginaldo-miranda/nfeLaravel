@extends('layouts.app')

@section('conteudo')
    {{--   apresentacao de erros de validacao  --}}
    @section('titulopagina')
    
      <div class="img" class="col-md-4 col-md-4 offset-5 col-sm-8 offset-2 col-xs-12">
          <h3>Cadastro de Clientes</h3>
      </div>

    
    @endsection 
   
    

    @include('inc.erros')

  {{--   <div class="container">  --}}
    

    <form method="post" action="/cliente">

        {{ csrf_field() }}

                   
            <div class="row"> {{--<!-- Linha formulário todo --> --}}
                
                {{--    <!-- Primeira coluna do formulário -->  --}}
                <div class="col-12 col-lg-6" style="background-color: aqua">
                        
                            
                        <div class="row"> {{-- <!-- Primeira linha de campos -->  --}}
                        
                            <div class="col-12">
                                <h4>Ficha Cadastral</h4>
                            </div>

                            <div class="col-12 col-md-8">
                                <div class="form-group">
                                <label for="text_nome">razaosocial</label> 
                                <input type="text" class="form-control" id="text_nome" name="text_razaosocial" placeholder=" razao social:">          
                                </div>
                                <div class="form-group">
                                <label for="text_nome">Fantasia</label> 
                                <input type="text" class="form-control" id="text_nome" name="text_nome" placeholder="nome do funcionario:">   
                            </div>
    
                            </div>


                            <div class="col-12 col-md-4">
                                <div class="form-group">
                                <label for="text_nome">Pessoa</label> 
                                <input type="text" class="form-control" id="text_nome" name="text_nome" placeholder="nome do funcionario:">   
                                </div>
                            </div>
                        
                        </div> {{--<!-- /Primeira linha de campos -->  --}}

                        
                        <div class="row"> {{--  <!-- Segunda linha de campos -->  --}}

                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <label for="text_nome">Cnpj</label> 
                                    <input type="text" class="form-control" id="text_nome" name="text_nome" placeholder="nome do funcionario:">   

                                </div>
                            </div>

                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <label for="text_endereco">inscricao</label> 
                                    <input type="text" class="form-control" id="text_endereco" name="text_endereco" placeholder="endereco:">   
                                </div>
                            </div>
                        
                        </div> {{-- <!-- /Segunda linha de campos -->  --}}

                </div> {{--<!-- /Primeira coluna do formulário -->  --}}

                    {{--  <!-- Segunda Coluna do formulário -->  --}}
                    <div class="col-12 col-lg-6" style="background-color: aquamarine">
                     
                        <div class="row">  {{--   <!-- Terceira linha de campos -->  --}}

                            <div class="col-12">
                                <h4>Contato</h4>
                            </div>


                            <div class="col-12 col-md-4">
                                <div class="form-group">
                                <label for="fone">Fone</label>
                                <input type="text" class="form-control" id="fone" placeholder="Seu Telefone">
                                </div>
                            </div>

                            <div class="col-12 col-md-2">
                               <div class="form-group">
                                  <label for="text_funcao">ramalcontato</label> 
                                  <input type="text" class="form-control" id="text_funcao" name="text_funcao" placeholder="funcao">   
                                </div>
                            </div>   

                            <div class="col-12 col-md-5">
                                <div class="form-group">
                                <label for="cel">Celular</label>
                                <input type="text" class="form-control" id="cel" placeholder="Seu Celular">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="text_funcao">email</label> 
                                    <input type="text" class="form-control" id="text_funcao" name="text_funcao" placeholder="funcao">   
                                </div>
                            </div>  
                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <label for="text_funcao">contato</label> 
                                    <input type="text" class="form-control" id="text_funcao" name="text_funcao" placeholder="funcao">   
                                </div> 
                            </div>  

                        </div> {{--  <!-- /Terceira linha de campos -->  --}}
                    </div> {{-- <!-- /Segunda Coluna do formulário -->  --}}

            </div> {{-- <!-- /Linha formulário todo -->  --}}


             {{-- bloco inferior esquerdo --}}
                <div class="row">
                        
                    <div class="col-12 col-lg-6" style="background-color: aquamarine">

                      <div class="row">
                        <div class="col-12">
                            <h4>Logradouro</h4>
                        </div>

                        <div class="col-12 col-md-10">
                            <div class="form-group">
                                <label for="endereco">Endereço</label>
                                <input type="text" class="form-control" id="endereco" placeholder="Seu Endereço">
                            </div>
                        </div>

                        <div class="col-12 col-md-2">
                            <div class="form-group">
                                <label for="num">Nº</label>
                                <input type="text" class="form-control" id="num" placeholder="999">
                            </div>
                        </div>



                    <div class="col-12 col-md-6">
                        <div class="form-group">
                            <label for="text_nome">Bairro</label> 
                            <input type="text" class="form-control" id="text_nome" name="text_nome" placeholder="nome do funcionario:">   
                        </div>
                    </div>   
                    
                    <div class="col-12 col-md-6">
                        <div class="form-group">
                                <label for="text_nome">Cep</label> 
                                <input type="text" class="form-control" id="text_nome" name="text_nome" placeholder="nome do funcionario:">   
                        </div>     
                    </div>


                    <div class="col-12 col-md-6">
                        
                            <div class="form-group">
                            <label for="text_salario">Cod Cidade</label> 
                            <input type="text" class="form-control" id="text_salario" name="text_salario" placeholder="salario:">   
                            </div>
                    </div>

                        <div class="col-12 col-md-6">   
                            <div class="form-group">
                                <label for="text_funcao">uf</label> 
                                <input type="text" class="form-control" id="text_funcao" name="text_funcao" placeholder="funcao">   
                            </div>
                        </div>   
                        
                    </div>   
   
                </div>

               {{-- <div class="col-12 col-md-6">  --}}

                <div class="col-12 col-md-6" style="background-color: aqua">
                    <div class="col-12">
                    <h4>Outros</h4>
                    </div>

                    <div class="col-12 col-md-6">
                        <div class="form-group">
                            <label for="text_funcao">consufinal</label>
                            <input type="text" class="form-control" id="text_funcao" name="text_funcao" placeholder="funcao">
                        </div>
                    </div>

                    <div class="col-12 col=md-6">
                        <div class="form-group">
                           <label for="text_funcao">diferido</label>
                           <input type="text" class="form-control" id="text_funcao" name="text_funcao" placeholder="funcao">
                        </div>
                    </div>
                    <div class="col-12 col=md-6">
                     <div class="form-group">
                         <label for="text_funcao">ehtransp</label>
                         <input type="text" class="form-control" id="text_funcao" name="text_funcao" placeholder="funcao">
                     </div>
                </div>

                     <div="row">
                         <div= class="text-center">
                             <button type="submit" class="btn btn-primary">Enviar</button>
                         </div=>
                     </div>
                </div>
               

                                  
    </form>
    {{-- </div> --}}
            
@endsection

