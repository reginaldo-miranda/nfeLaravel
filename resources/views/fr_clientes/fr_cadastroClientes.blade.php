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
    <div class="container">
        <form method="post" action="/cliente">

                        {{ csrf_field() }}

                   {{--       <!-- Linha formulário todo --> --}}
                        <div class="row">
                         {{--    <!-- Primeira coluna do formulário -->  --}}
                            <div class="col-12 col-lg-6" style="background-color: aqua">
                                  
                          {{--         <!-- Primeira linha de campos -->  --}}
                                  <div class="row">
                                      
                                      <div class="col-12">
                                          <h3>Ficha Cadastral</h3>
                                      </div>
            
                                      <div class="col-12 col-md-8">
                                          <div class="form-group">
                                            <label for="nome">Nome</label>
                                            <input type="text" class="form-control" id="nome" placeholder="Seu Nome">
                                          </div>
                                      </div>
            
                                      <div class="col-12 col-md-4">
                                          <div class="form-group">
                                            <label for="email">Email</label>
                                            <input type="email" class="form-control" id="email" placeholder="seu@email.com">
                                          </div>
                                        </div>
                                  
                                  </div>
                               {{--    <!-- /Primeira linha de campos -->  --}}
            
                                 {{--  <!-- Segunda linha de campos -->  --}}
                                  <div class="row">
            
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
                                  
                                  </div>
                                  {{-- <!-- /Segunda linha de campos -->  --}}
            
                              </div>
                             {{--  <!-- /Primeira coluna do formulário -->  --}}
            
                             {{--  <!-- Segunda Coluna do formulário -->  --}}
                              <div class="col-12 col-lg-6" style="background-color: aquamarine">
                                  
                                {{--   <!-- Terceira linha de campos -->  --}}
                                  <div class="row">
            
                                      <div class="col-12">
                                          <h3>Contato</h3>
                                      </div>
            
            
                                      <div class="col-12">
                                          <div class="form-group">
                                            <label for="fone">Fone</label>
                                            <input type="text" class="form-control" id="fone" placeholder="Seu Telefone">
                                          </div>
                                      </div>
            
                                      <div class="col-12">
                                          <div class="form-group">
                                            <label for="cel">Celular</label>
                                            <input type="text" class="form-control" id="cel" placeholder="Seu Celular">
                                          </div>
                                      </div>
                                  
                                  </div>
                                 {{--  <!-- /Terceira linha de campos -->  --}}
            
                              </div>
                              {{-- <!-- /Segunda Coluna do formulário -->  --}}
                             </div>
                             {{-- <!-- /Linha formulário todo -->  --}}


        {{--                  
                  
            <div class="container-fluid">

                <div class="row">

                    <div class="col col md-12">

                        <label for="text_nome">razaosocial</label> 
                        <input type="text" class="form-control" id="text_nome" name="text_razaosocial" placeholder=" razao social:">   
                  
                        <div class="form-group">
                            <label for="text_nome">Pessoa</label> 
                            <input type="text" class="form-control" id="text_nome" name="text_nome" placeholder="nome do funcionario:">   
                        </div>
                        <div> 

                            <label for="text_nome">Fantasia</label> 
                            <input type="text" class="form-control" id="text_nome" name="text_nome" placeholder="nome do funcionario:">   
                        </div>
                        <div class="form-group">
                            <label for="text_nome">Cnpj</label> 
                            <input type="text" class="form-control" id="text_nome" name="text_nome" placeholder="nome do funcionario:">   
                        </div>
                    
                        <div class="form-group">
                            <label for="text_endereco">inscricao</label> 
                            <input type="text" class="form-control" id="text_endereco" name="text_endereco" placeholder="endereco:">   
                        </div>
                        
                        <div>
                            <label for="text_nome">Endereco</label> 
                            <input type="text" class="form-control" id="text_nome" name="text_nome" placeholder="nome do funcionario:">   
                        </div>

                        <div class="form-group">
                            <label for="text_email">numero</label> 
                            <input type="text" class="form-control" id="text_email" name="text_email" placeholder="email:">   
                        </div>
                        <div class="col md-4">
                            <label for="text_nome">Bairro</label> 
                            <input type="text" class="form-control" id="text_nome" name="text_nome" placeholder="nome do funcionario:">   
                        </div>
                        <div class="col-sm">
                            <label for="text_nome">Cep</label> 
                            <input type="text" class="form-control" id="text_nome" name="text_nome" placeholder="nome do funcionario:">   
                        </div>
                        <div class="form-group">
                            <label for="text_salario">codcidade</label> 
                            <input type="text" class="form-control" id="text_salario" name="text_salario" placeholder="salario:">   
                        </div>
    
                    </div>

                    <div class="w-100"></div>
                    

                    <div class="form-group">
                        <label for="text_funcao">uf</label> 
                        <input type="text" class="form-control" id="text_funcao" name="text_funcao" placeholder="funcao">   
                    </div>
                   

                    <div class="form-group">
                        <label for="text_funcao">contato</label> 
                        <input type="text" class="form-control" id="text_funcao" name="text_funcao" placeholder="funcao">   
                    </div>

                    <div class="form-group">
                        <label for="text_funcao">telefone</label> 
                        <input type="text" class="form-control" id="text_funcao" name="text_funcao" placeholder="funcao">   
                    </div>


                    <div class="form-group">
                        <label for="text_funcao">ramalcontato</label> 
                        <input type="text" class="form-control" id="text_funcao" name="text_funcao" placeholder="funcao">   
                    </div>

                    <div class="form-group">
                        <label for="text_funcao">email</label> 
                        <input type="text" class="form-control" id="text_funcao" name="text_funcao" placeholder="funcao">   
                    </div>

                    <div class="form-group">
                        <label for="text_funcao">consufinal</label> 
                        <input type="text" class="form-control" id="text_funcao" name="text_funcao" placeholder="funcao">   
                    </div>

                    <div class="form-group">
                        <label for="text_funcao">diferido</label> 
                        <input type="text" class="form-control" id="text_funcao" name="text_funcao" placeholder="funcao">   
                    </div>

                    <div class="form-group">
                        <label for="text_funcao">ehtransp</label> 
                        <input type="text" class="form-control" id="text_funcao" name="text_funcao" placeholder="funcao">   
                    </div>


                </div>
                     
            </div>   
           
                <div class="text-center">
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </div>
                --}}                   
        </form>
    </div>               
            
@endsection






{{-- 
$table->increments('codigo');  // id
// +"codigo integer NOT NULL, "
 //+"razaosocial character varying(60), "
 $table->string('razaosocial',150);
//  +"fantasia character varying(60), "
 $table->string('fantasia',150);
 //+"pessoa character(1), "
 $table->string('pessoa',1);
 //+"cnpj character varying(18), "
 $table->string('cnpj',18);
//  +"inscest character varying(20), "
 $table->string('inscest',20);
 //+"endereco character varying(45), "
 $table->string('endedeco',45);
 //+"numero character varying(8), "
 $table->string('numero',8);
 //+"bairro character varying(25), "
 $table->string('bairro',25);
 //+"cep integer, "
 $table->integer('cep');
 //+"codcidade integer NOT NULL, "
 $table->integer('codcidade');
 //+"uf character(2), "
 $table->string('uf',2);
 // +"telefone character varying(20), "
 $table->string('telefone',20);
 // +"contato character varying(20), "
 $table->string('contato',20);
 //+"ramalcontato character varying(15), "
 $table->string('ramalcontato',15);
 //+"email character varying(50), "
 $table->string('email',50);
 //+"consufinal character(1), "
 $table->string('consufinal',1);
 //+"diferido character(1), "
 $table->string('diferido',1);
 //+"ehtransp character(1),"
 $table->string('ehtransp',1);   --}}
