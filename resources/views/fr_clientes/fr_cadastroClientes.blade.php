@extends('layouts.app')

@section('conteudo')
    {{--   apresentacao de erros de validacao  --}}
    @section('titulopagina')
    
      <div class="img" class="col-md-4 col-md-4 offset-5 col-sm-8 offset-2 col-xs-12">
          <h3>Cadastro de Clientes</h3>
      </div>

    
    @endsection 
   
    

   {{--  @include('inc.erros')  --}}
    <style>
        input{
            height: 18px;
            
        }
       /* #grupo{
            height: 25px;
        } */
        #text_codcidade, #text_uf, #text_pessoa{
            width: 17px;
            padding: 0;
            text-align: left;
        }

       #text_consufinal, #text_diferido, #text_ehtransp{

            width: 45px;
            padding: 10;
            text-align: left;
            margin-left: 10px;
        }
        #text_cnpj, #text_inscricao,#text_cep{
            width: 150px;
        }
        .lab{
            margin-left: 10px;
         /*   padding-right: 20px;*/
            padding-bottom: 0;
            
        }

        #btnsubmit{
            padding-top: 10px;
            text-align: center;
        }
    </style>   

  {{--   <div class="container">  --}}
    
    <form method="post" action="/cliente">  {{--  video aula 46 ti --}}

     {{--    {{ csrf_field() }}  --}}
        @include('fr_clientes.fr_unicoClienteCadastEdiar')

    {{--      
        <div class="row"> {{--<!-- Linha formulário todo --> 
            
              {{--    <!-- Primeira coluna do formulário -->  
            <div class="col-12 col-lg-6" style="background-color: aqua">
                    
                        
                <div class="row"> {{-- <!-- Primeira linha de campos -->  
                
                    <div class="col-12">
                        <h5>Ficha Cadastral</h5>
                    </div>

                    <div class="col-12 col-md-8">
                        <div class="form-group" id="grupo">
                                <label for="text_razaosocial">razaosocial</label> 
                                <input type="text" class="form-control" id="text_razaosocial" name="razaosocial" placeholder=" razao social:">          
                        </div>
                        <div class="form-group">
                                <label for="text_fantasia">Fantasia</label> 
                            <input type="text" class="form-control" id="text_fantasia" name="fantasia" placeholder="nome fantasia:">   
                        </div>

                    </div>

                    <div class="col-12 col-md-4">
                        <div class="form-group">
                            <label for="text_pessoa">Pessoa</label> 
                            <input type="text" class="form-control" id="text_pessoa" name="pessoa" placeholder="pessoa:">   
                        </div>
                    </div>
                
                </div> {{--<!-- /Primeira linha de campos -->  -

                    
                <div class="row"> {{--  <!-- Segunda linha de campos -->  

                    <div class="col-12 col-md-6">
                        <div class="form-group">
                            <label for="text_cnpj">Cnpj</label> 
                            <input type="text" class="form-control" id="text_cnpj" name="cnpj" placeholder="cnpj:">   

                        </div>
                    </div>

                    <div class="col-12 col-md-6">
                        <div class="form-group">
                            <label for="text_inscricao">inscricao</label> 
                            <input type="text" class="form-control" id="text_inscricao" name="inscest" placeholder="inscricao:">   
                        </div>
                    </div>
                
                </div> {{-- <!-- /Segunda linha de campos -->  
 
            </div> {{--<!-- /Primeira coluna do formulário -->  --}}

                {{--  <!-- Segunda Coluna do formulário -->  
            <div class="col-12 col-lg-6" style="background-color: aquamarine">
                
                <div class="row">  {{--   <!-- Terceira linha de campos -->  

                    <div class="col-12">
                        <h5>Contato</h5>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="form-group">
                            <label for="telefone">Fone</label>
                            <input type="text" class="form-control" id="text_telefone" name="telefone" placeholder="Seu Telefone">
                        </div>
                    </div>

                    <div class="col-12 col-md-2">
                        <div class="form-group">
                            <label for="text_ramalcontato">R contato</label> 
                            <input type="text" class="form-control" id="text_ramalcontato" name="ramalcontato" placeholder="ramal do contato">   
                        </div>
                    </div>   
                    
                    <div class="col-12 col-md-5">
                        <div class="form-group">
                            <label for="cel">Celular</label>
                        {{--     <input type="text" class="form-control" id="cel" placeholder="Celular">  
                        </div>  
                    </div>

                    <div class="col-12">
                        <div class="form-group">
                            <label for="text_email">email</label> 
                            <input type="text" class="form-control" id="text_email" name="email" placeholder="email">   
                        </div>
                    </div>  
                    <div class="col-12 col-md-6">
                        <div class="form-group">
                            <label for="text_contato">contato</label> 
                            <input type="text" class="form-control" id="text_contato" name="contato" placeholder="contato">   
                        </div> 
                    </div>  

                </div> {{--  <!-- /Terceira linha de campos -->  
            </div> {{-- <!-- /Segunda Coluna do formulário -->  

        </div> {{-- !-- /Linha formulário todo -->  
                {{-- bloco inferior esquerdo 
            <div class="row">
                    
                <div class="col-12 col-lg-6" style="background-color: aquamarine">

                    <div class="row">
                        <div class="col-12">
                            <h5>Logradouro</h5>
                        </div>

                        <div class="col-12 col-md-10">
                            <div class="form-group">
                                <label for="endereco">Endereço</label>
                                <input type="text" class="form-control" id="endereco" name="endereco" placeholder="Seu Endereço">
                            </div>
                        </div>

                        <div class="col-12 col-md-2">
                            <div class="form-group">
                                <label for="numero">Nº</label>
                                <input type="text" class="form-control" id="text_numero" name="numero" placeholder="n:">
                            </div>
                        </div>



                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="text_bairro">Bairro</label> 
                                <input type="text" class="form-control" id="text_bairro" name="bairro" placeholder="bairro:">   
                            </div>
                        </div>   
                    
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="text_cep">Cep</label> 
                                <input type="text" class="form-control" id="text_cep" name="cep" placeholder="cep:">   
                            </div>     
                        </div>


                        <div class="col-12 col-md-6">
                            <div class="form-group">
                            <label for="text_codcidade">Cod Cidade</label> 
                            <input type="text" class="form-control" id="text_codcidade"  name="codcidade" placeholder="cc:">   
                            </div>
                        </div>  
                        <div class="col-12 col-md-6">   
                            <div class="form-group">
                                <label for="text_uf">uf</label> 
                                <input type="text" class="form-control" id="text_uf" name="uf" placeholder="uf">   
                            </div>
                        </div>   
                
                     </div>   

                </div>

                     {{-- <div class="col-12 col-md-6">  -
            
                    <div class="col-12 col-md-6" style="background-color: aqua">
                
                       <div class="col-12">
                           <h5>Outros</h5>
                       </div>
                        <div class="row">
                            {{--  <div class="col-12 col-md-12">   
                            <div class="form-group">
                              <label for="text_consufinal" class="lab" >consufinal</label>
                              <input type="text" class="form-control" id="text_consufinal" name="consufinal" placeholder="consumidor final">
                            </div>  
                            {{--  </div>   

                             {{-- <div class="col-12 col=md-6"> -
                            <div class="form-group"> 
                              <label for="text_diferido" class="lab">diferido</label>
                              <input type="text" class="form-control" id="text_diferido" name="diferido" placeholder="diferido">
                            </div>
                             {{--   </div> -

                            
                            <div class="form-group">
                              <label for="text_ehtransp" class="lab">ehtransp</label>
                              <input type="text" class="form-control" id="text_ehtransp" name="ehtransp" placeholder="ehtransp">
                            </div>
                           </div> 
                       </div>
                       <div class="col-12" id="btnsubmit">
                          <button type="submit" class="btn btn-primary" >Enviar</button>
                        </div>   
                    </div>   
                     {{--<div class="col-12 col=md-6">      
                         
                        --}}
    </form>
    {{-- </div> --}}
   
            
@endsection

